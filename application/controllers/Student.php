<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Student extends CI_Controller
{
    public function index()
    {
        $data['student'] = $this->db->get_where('student', [$this->session->userdata('username')])->row_array();

        $data['judul'] = 'Student';
        $this->load->view('student/templates/header', $data);
        $this->load->view('student/templates/sidebar');
        $this->load->view('student/templates/topbar');
        $this->load->view('student/index');
        $this->load->view('student/templates/footer');
    }

    public function profile()
    {
        $data['student'] = $this->db->get_where('student', [$this->session->userdata('username')])->row_array();

        $data['judul'] = 'Profil';
        $this->load->view('student/templates/header', $data);
        $this->load->view('student/templates/sidebar');
        $this->load->view('student/templates/topbar');
        $this->load->view('student/profile', $data);
        $this->load->view('student/templates/footer');
    }
}
