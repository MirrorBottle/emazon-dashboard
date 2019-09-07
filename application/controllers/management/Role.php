<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Role_model');
        check_user_has_login('has_login');
    }

    public function get_role_info()
    {
        $role = $this->db->get_where('role', ['id' => $_POST['id']])->row_array();
        echo json_encode($role);
    }

    public function index()
    {
        $data['title'] = 'Emazon Dashboard Role Management';
        $data['roles'] = $this->Role_model->get_all_role();

        $this->load->main_view('pages/management/role', $data);
    }
    
    public function add()
    {
        $id = $this->input->post('roleId');
        $name = $this->input->post('roleName');

        if( $id && $name )
        {
            $result = $this->Role_model->add_role([
                'id' => $id,
                'name' => $name
            ]);

            if( $result ) 
            {
                $this->session->set_flashdata('role_management_message', [
                    'text' => "'$name' role has been added.",
                    'type' => 'success'
                ]);
            }
            else
            {
                $this->session->set_flashdata('role_management_message', [
                    'text' => 'Failed to adding role. Something wrong!',
                    'type' => 'danger'
                ]);
            }
        }

        redirect('management/role');
    }

    public function edit()
    {
        $old_id = $this->input->post('roleId');
        $id = $this->input->post('newRoleId');
        $name = $this->input->post('roleName');

        if( $id && $name )
        {
            $result = $this->Role_model->edit_role([
                'id' => $id,
                'name' => $name
            ], $old_id);

            if( $result ) 
            {
                $this->session->set_flashdata('role_management_message', [
                    'text' => "'$name' role has been changed.",
                    'type' => 'success'
                ]);
            }
            else
            {
                $this->session->set_flashdata('role_management_message', [
                    'text' => 'Failed to edit role. Something wrong!',
                    'type' => 'danger'
                ]);
            }
        }

        redirect('management/role');
    }
}