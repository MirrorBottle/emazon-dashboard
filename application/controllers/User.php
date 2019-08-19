<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'User - M. Novil Fahlevy';

        $this->load->main_view('pages/user', $data);
    }
}