<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model
{
    public function get_all_role()
    {
        return $this->db->get('role')->result_array();
    }

    public function add_model($data)
    {
        return $this->db->insert('role', $data);
    }
}