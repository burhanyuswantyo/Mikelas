<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Student extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['judul'] = 'Kelas';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('student/index');
        $this->load->view('templates/footer');
    }

    public function tambahKelas()
    {
        $user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $kode = $this->input->post('kode');
        $kelas = $this->db->get_where('kelas', ['kode' => $kode])->row_array();

        if ($kelas != null) {
            $data = [
                'kelas_id' => $kelas['id'],
                'user_id' => $user['id']
            ];
            $this->db->insert('kelas_access', $data);
            redirect('student');
        } else {
            echo 'gagal';
        }
    }
}
