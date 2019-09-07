<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model
{
    public function get_all_role()
    {
        return $this->db->get('role')->result_array();
    }

    public function add_role($data)
    {
        return $this->db->insert('role', $data);
    }

    public function edit_role($data, $last_id)
    {
        $this->db->where('id', $last_id);
        return $this->db->update('role', $data);
    }
}