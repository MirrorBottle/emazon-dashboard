<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Emazon Dashboard Login';

        $this->form_validation->set_rules('email', 'email', 'required|valid_emails', [
            'required' => 'Enter your email address.',
            'valid_emails' => 'Enter a valid email!' 
        ]);
        $this->form_validation->set_rules('password', 'password', 'required', [
            'required' => 'Enter the password!'
        ]);

        if( $this->form_validation->run() )
        {
            $user = $this->user->get_user_by_email(
                $this->input->post('email')
            );

            if( $user )
            {
                $password_form = $this->input->post('password');
                if( password_verify($password_form, $user['password']) )
                {
                    if( $user['is_active'] )
                    {
                        if( $this->input->post('rememberMe') )
                        {
                            setcookie(
                                'rm', 
                                $user['id'],
                                time() + 60 * 60 * 24 * 360,
                                '/'
                            );
                        }

                        $_SESSION['user'] = [
                            'id' => $user['id'],
                            'email' => $user['email'],
                            'name' => [
                                'firstName' => $user['first_name'],
                                'lastName' => $user['last_name']
                            ]
                        ];

                        redirect('dashboard');
                    }
                    else
                    {
                        $this->session->set_flashdata('auth_message', [
                            'text' => 'Account is not active yet, please verify your account first.',
                            'type' => 'danger'
                        ]);
                    }
                }
                else
                {
                    $this->session->set_flashdata('auth_message', [
                        'text' => 'Password was not match with the current account!',
                        'type' => 'danger'
                    ]);
                }
            }
            else
            {
                $this->session->set_flashdata('auth_message', [
                    'text' => 'Account does not exists!',
                    'type' => 'danger'
                ]);
            }

            redirect('login');
        }

        $this->load->view('templates/auth/header', $data);
        $this->load->view('pages/auth/login');
        $this->load->view('templates/auth/footer');
    }
}