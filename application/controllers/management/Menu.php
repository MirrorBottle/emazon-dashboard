<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Emazon Dashboard Menu Management';

        $this->load->main_view('pages/management/menu', $data);
    }
}