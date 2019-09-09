<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_user_has_login('has_login');
    }

    public function index()
    {
        $data['title'] = 'Emazon Dashboard Menu Management';

        $this->load->main_view('pages/management/menu', $data);
    }

    public function get_all_controller($path = '')
    {
        $controllers = scandir('application/controllers/'.$path);
        echo json_encode($controllers);
    }

    // public function add()
    // {

    // }
}