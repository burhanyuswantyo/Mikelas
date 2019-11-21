<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Menu extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['judul'] = 'Menu Management';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('menu/index');
        $this->load->view('templates/footer');
    }
}