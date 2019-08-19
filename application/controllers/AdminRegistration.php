<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminRegistration extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Add an Admin';

        $this->load->main_view('pages/adminregister', $data);
    }
}