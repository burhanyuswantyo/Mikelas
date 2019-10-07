<?php

class RegTeacher extends CI_Controller{
    // public function __construct(){
    //     parent::__construct();
    //     $this->load->model('Teacher_model');
    // }

    public function index(){
        $data['judul'] = 'Daftar Guru';

        $this->load->view('templates/header', $data);
        $this->load->view('teacher/register', $data);
        $this->load->view('templates/footer');
    }
}