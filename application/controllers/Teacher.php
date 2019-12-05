<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Teacher extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Kelas', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Kelas';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('teacher/index');
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('kelas', [
                'nama' => $this->input->post('nama'),
                'kode' => strtoupper(random_string('alpha', 5)),
                'user_id' => $this->session->userdata('user_id')
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas berhasil dibuat!</div>');
            redirect('teacher');
        }
    }
}
