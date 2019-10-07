<?php

class Student extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Siswa_model');
    }

    public function index(){
        $data['judul'] = 'Siswa';
        $data['siswa'] = $this->Siswa_model->getAllSiswa();

        $this->load->view('templates/header', $data);
        $this->load->view('student/index', $data);
        $this->load->view('templates/footer');
    }

    public function register(){
        $data['judul'] = 'Daftar Siswa';

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('student/register');
            $this->load->view('templates/footer');
        } else {
            $this->Siswa_model->tambahDataSiswa();
            redirect('home');
        }
        
    }
}
