<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function index()
    {
        if( isset($_COOKIE['rm']) )
        {
            setcookie('rm', NULL, -time(), '/');
            $_COOKIE = [];
        }

        session_destroy();
        session_unset();
        $_SESSION = [];

        redirect('login');
    }
}