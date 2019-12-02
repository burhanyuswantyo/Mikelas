<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Menu_model', 'menu');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->menu->getSubMenu();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        // $this->form_validation->set_rules('sub_menu', 'Sub Menu', 'required');
        // $this->form_validation->set_rules('menu_id', 'Menu Id', 'required');
        // $this->form_validation->set_rules('url', 'Url', 'required');
        // $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Menu Management';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('menu/index');
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('menu', '<div class="alert alert-success" role="alert">Menu berhasil ditambahkan!</div>');
            redirect('menu');
        }
    }

    public function hapusMenu($id)
    {
        $this->Menu_model->hapusMenu($id);
        redirect('menu');
    }




    public function subMenu()
    {
        $this->Menu_model->tambahSubMenu();
        $this->session->set_flashdata('sub_menu', '<div class="alert alert-success" role="alert">Sub Menu berhasil ditambahkan!</div>');
        redirect('menu');
    }

    public function hapusSubMenu($id)
    {
        $this->Menu_model->hapusSubMenu($id);
        redirect('menu');
    }

    public function ubahSubMenu($id)
    {
        $menu = $this->input->post('sub');
        $data = array(
            'menu' => $menu
        );

        $this->db->where('id', $id);
        $this->db->update('user_menu', $data);
        redirect('menu');
    }

    public function getMenu()
    {
        $id = $this->input->post('id');
        echo json_encode($this->menu->getMenu($id));
    }
}
