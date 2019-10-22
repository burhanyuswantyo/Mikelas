<?php

class Teacher extends CI_Controller
{
    public function index($nama = 'Teacher')
    {
        $data['judul'] = 'Teacher';
        $this->load->view('teacher/templates/header', $data);
        $this->load->view('teacher/templates/sidebar');
        $this->load->view('teacher/templates/topbar');
        $this->load->view('teacher/index');
        $this->load->view('teacher/templates/footer');
    }
}
