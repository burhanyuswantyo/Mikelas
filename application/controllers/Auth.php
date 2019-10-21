<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Login';
        $this->load->view('auth/templates/header', $data);
        $this->load->view('auth/login');
        $this->load->view('auth/templates/footer');
    }

    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi';
            $this->load->view('auth/templates/header', $data);
            $this->load->view('auth/registration');
            $this->load->view('auth/templates/footer');
        } else {
            echo 'Data telah disimpan!';
        }
    }
}
