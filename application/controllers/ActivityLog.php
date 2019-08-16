<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActivityLog extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Emazon Admin Activity Log';

        $this->load->main_view('pages/activity_log', $data);
    }
}