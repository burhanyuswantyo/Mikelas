<?php

class Login extends CI_Controller{
    public function index($nama = 'Login'){
        $data['judul'] = 'Login';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('login/index');
        $this->load->view('templates/footer');
    }
}