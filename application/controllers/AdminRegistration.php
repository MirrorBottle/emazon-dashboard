<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminRegistration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_user_has_login('has_login');
    }

    public function index()
    {
        $data['title'] = 'Add an Admin';

        $this->load->main_view('pages/adminregister', $data);
    }
}