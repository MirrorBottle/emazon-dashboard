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
            $result = $this->Role_model->add_model([
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
}