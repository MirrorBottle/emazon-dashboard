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
            
        }

        $this->load->view('templates/auth/header', $data);
        $this->load->view('pages/auth/login');
        $this->load->view('templates/auth/footer');
    }
}