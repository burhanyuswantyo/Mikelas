<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Student_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login Page';
            $this->load->view('auth/templates/header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/templates/footer');
        } else {
            $this->Student_model->login();
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[student.username]', [
            'is_unique' => 'Username telah digunakan'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[student.email]', [
            'is_unique' => 'Email ini telah terdaftar!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registration Page';
            $this->load->view('auth/templates/header', $data);
            $this->load->view('auth/registration');
            $this->load->view('auth/templates/footer');
        } else {
            $this->Student_model->tambah();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pendaftaran berhasil, silahkan login!</div>');
            redirect('auth');
        }
    }
}
