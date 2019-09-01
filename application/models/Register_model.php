<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model
{
    public function create_account($data) 
    {
        $this->db->insert('user', $data);
        return $this->db->affected_rows();
    }

    public function insert_token($email, $token)
    {
        $this->db->insert('user_token', [
            'id' => '',
            'email' => $email,
            'token' => $token
        ]);
    }
}