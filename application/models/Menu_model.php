<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model 
{
    public function get_all_menu()
    {
        return $this->db->get('menu')->result_array();
    }

    public function get_menu_by_id($id)
    {
        return $this->db->get_where('menu', ['id' => $id])->row_array();
    }

    public function get_dropdown_menu_by_menu_id($menu_id)
    {
        return $this->db->get_where('dropdown_menu', ['menu_id' => $menu_id])->result_array();
    }

    public function is_dropdown($menu_id) 
    {
        return $this->db->get_where('dropdown_menu', ['menu_id' => $menu_id])->num_rows();
    }
}