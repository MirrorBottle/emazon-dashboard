<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_user_has_login('has_login');
    }

    public function index()
    {
        $data['title'] = 'Emazon Dashboard Role Management';

        $this->load->main_view('pages/management/role', $data);
    }
}