<?php

class Student extends CI_Controller
{
    public function index($nama = 'Student')
    {
        $data['judul'] = 'Student';
        $this->load->view('student/templates/header', $data);
        $this->load->view('student/templates/sidebar');
        $this->load->view('student/templates/topbar');
        $this->load->view('student/index');
        $this->load->view('student/templates/footer');
    }
}
