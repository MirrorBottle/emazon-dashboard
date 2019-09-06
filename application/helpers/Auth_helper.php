<?php

function check_rememberMe_cookie() {
    $ci = get_instance();

    if( isset($_COOKIE['rm']) ) {
        $id = explode('ab', $_COOKIE['rm']);
        $id = end($id);

        $ci->load->model('user');

        $user = $ci->user->get_user_by_id($id);
        if( $user ) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'email' => $user['email'],
                'name' => [
                    'firstName' => $user['first_name'],
                    'lastName' => $user['last_name']
                ]
            ];

            redirect('dashboard');
        }
    }
}

function check_user_has_login($page) {
    $ci = get_instance();
    
    switch( $page ) {
        case 'auth' :
            if( $ci->session->has_userdata('user') ) {
                redirect('dashboard');
            }
        break;

        case 'has_login':
            if( !$ci->session->has_userdata('user') ) {
                redirect('login');
            }
        break;
    }
}