<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Emazon Dashboard';

        $this->load->main_view('pages/dashboard', $data);
    }
}