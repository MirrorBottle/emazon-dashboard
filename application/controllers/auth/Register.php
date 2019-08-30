<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
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
            $this->load->model('Register_model', 'register');
            
            $email = $this->input->post('email', true);
            // $result = $this->register->create_account([
            //     'id' => '',
            //     'first_name' => htmlspecialchars($this->input->post('firstName', true)),
            //     'last_name' => htmlspecialchars($this->input->post('lastName', true)),
            //     'email' => $email,
            //     'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            //     'img' => 'default.png',
            //     'role_id' => 1,
            //     'created_at' => time(),
            //     'is_active' => 0
            // ]);

            var_dump($this->send_mail(['email' => $email, 'token' => '123'], 'verify') ? 'email send' : 'failed'); die;

            if( true )
            {
                // $token = base64_encode(random_bytes(32));
                // $this->db->insert('user_token', [
                //     'id' => '',
                //     'email' => $email,
                //     'token' => $token
                // ]);


                $this->session->set_flashdata('auth_message', [
                    'text' => 'Your account has been registerd. Please check your email to verify your account.',
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
}