<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_rememberMe_cookie();
        check_user_has_login('auth');
        $this->load->model('Register_model', 'register');
    }

    public function index()
    {
        $data['title'] = 'Emazon Dashboard Register';

        $this->form_validation->set_rules('firstName', 'name', 'required', ['required' => 'Please enter your first name.']);

        $this->form_validation->set_rules('lastName', 'name', 'required', ['required' => 'Please enter your last name.']);

        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[user.email]', [
            'required' => 'Please enter your email...',
            'valid_email' => 'Please enter a valid email!',
            'is_unique' => 'This email has been registered.'
        ]);

        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]', [
            'required' => 'You should create a password for your account.',
            'min_length' => 'Password must contains minimal 8 character'
        ]);
        
        $this->form_validation->set_rules('confirmPassword', 'password', 'required|matches[password]', [
            'required' => '',
            'matches' => 'Password not equal!'
        ]);

        if( $this->form_validation->run() ) 
        {   
            $email = $this->input->post('email', true);
            $accountCreated = $this->register->create_account([
                'id' => '',
                'first_name' => htmlspecialchars($this->input->post('firstName', true)),
                'last_name' => htmlspecialchars($this->input->post('lastName', true)),
                'email' => $email,
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'img' => 'default.png',
                'role_id' => 1,
                'created_at' => time(),
                'is_active' => 0
            ]);

            if( $accountCreated )
            {
                $this->load->library('encryption');
                $token = bin2hex($this->encryption->create_key(16));
                
                $emailSended = $this->send_mail([
                    'email' => $email,
                    'token' => $token
                ], 'verify');
                
                if( $emailSended )
                {
                    $this->register->insert_token($email, $token);
                }

                $this->session->set_flashdata('auth_message', [
                    'text' => 'Your account has been registerd. Please check your email to verify your account. Not received the email? <a href="'. base_url("auth/register/sendemailverification/$email/$token") .'">Send it again</a>.',
                    'type' => 'success'
                ]);

                redirect('login');
            }

            $this->session->set_flashdata('auth_message', [
                'text' => 'Failed to create account. Please try again!',
                'type' => 'danger'
            ]);
        }

        $this->load->view('templates/auth/header', $data);
        $this->load->view('pages/auth/register');
        $this->load->view('templates/auth/footer');
    }

    public function sendEmailVerification($email, $token)
    {
        $user = $this->user->get_user_by_email($email);
        if( $user )
        {
            if( !$user['is_active'] )
            {
                $emailSended = $this->send_mail([
                    'email' => $email,
                    'token' => $token
                ], 'verify');

                if( !$this->db->get_where('user_token', ['token' => $token])->row_array() )
                {
                    $this->register->insert_token($email, $token);
                }
            }
        }

        $this->session->set_flashdata('auth_message', [
            'text' => 'Your account has been registerd. Please check your email to verify your account. Not received the email? <a href="'. base_url("auth/register/sendemailverification/$email/$token") .'">Send it again.</a>',
            'type' => 'success'
        ]);

        redirect('login');
    }

    public function verify($email, $token)
    {
        $user = $this->user->get_user_by_email($email);
        $user_verification = $this->db->get_where('user_token', ['token' => $token])->row_array();

        if( $user )
        {
            if( !$user['is_active'] )
            {
                if( $user_verification )
                {
                    if( $token === $user_verification['token'] )
                    {
                        $this->db->where('email', $email);
                        if( $this->db->update('user', ['is_active' => 1]) )
                        {
                            $this->db->delete('user_token', ['token' => $token]);

                            $this->session->set_flashdata('auth_message', [
                                'text' => 'Your account has been verified. You can login now :)',
                                'type' => 'success'
                            ]);
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('auth_message', [
                            'text' => 'Failed to verify account! Token does not valid.',
                            'type' => 'danger'
                        ]);
                    }
                }
            }
            else
            {
                $this->session->set_flashdata('auth_message', [
                    'text' => 'This account has been verified.',
                    'type' => 'info'
                ]);
            }
        }
        else
        {
            $this->session->set_flashdata('auth_message', [
                'text' => 'Failed to verify account! Account does not exists.',
                'type' => 'danger'
            ]);
        }

        redirect('login');
    }
}