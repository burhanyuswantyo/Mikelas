<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['judul'] = 'Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Nama role', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Role';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/role');
            $this->load->view('templates/footer');
        } else {
            $this->User_model->tambahRole();
            $this->session->set_flashdata('role', '<div class="alert alert-success" role="alert">Role berhasil ditambahkan!</div>');
            redirect('admin/role');
        }
    }

    public function getRole()
    {
        $id = $this->input->post('id');
        $query = "SELECT *
                FROM `user_role`
                WHERE `id` = $id
        ";
        echo json_encode($this->db->query($query)->row_array());
    }

    public function hapusRole($id)
    {
        $this->User_model->hapusRole($id);
        redirect('admin/role');
    }

    public function ubahRole()
    {
        $id = $this->input->post('id');
        $this->User_model->ubahRole($id);
        redirect('admin/role');
    }

    public function roleAccess($role_id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $data['judul'] = 'Role Access';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/role-access');
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akses berhasil dirubah!</div>');
    }
}
