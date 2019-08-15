<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Emazon Dashboard Register';

        $this->load->view('templates/auth/header', $data);
        $this->load->view('pages/auth/register');
        $this->load->view('templates/auth/footer');
    }
}