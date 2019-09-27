<?php

class RegStudent extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Siswa_model');
    }

    public function index(){
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('student/register', $data);
        $this->load->view('templates/footer');
    }
}