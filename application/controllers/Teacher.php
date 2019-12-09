<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Teacher extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->load->model('Ujian_model', 'ujian');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Kelas', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Kelas';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('teacher/index');
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('kelas', [
                'nama' => $this->input->post('nama'),
                'kode' => strtoupper(random_string('alpha', 5)),
                'user_id' => $this->session->userdata('user_id')
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas berhasil dibuat!</div>');
            redirect('teacher');
        }
    }

    public function ujian()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['ujian'] = $this->ujian->getAllUjian($data['user']['id']);
        $data['kelas'] = $this->ujian->getAllKelas($data['user']['id']);
        $data['tipe'] = $this->ujian->getTipeUjian();

        $data['judul'] = 'Ujian';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('teacher/ujian');
        $this->load->view('templates/footer');
    }

    public function buatUjian()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->ujian->buatUjian($data['user']['id']);
        redirect('teacher/ujian');
    }

    public function hapusUjian($ujian_id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->db->delete('ujian', array('id' => $ujian_id));
        redirect('teacher/ujian/' . $ujian_id);
    }

    public function pilgan($ujian_id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['ujian_id'] = $ujian_id;
        $data['pilgan'] = $this->ujian->getAllPilgan($ujian_id);
        $data['judul'] = 'Tambah Soal';

        $query = "SELECT `id`, `soal`, `jawaban`
                    FROM `soal_pilgan`
                    WHERE `ujian_id` = 2
                    ";

        $result = $this->db->query($query)->result_array();

        $data['soal'] = $result;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('teacher/pilgan');
        $this->load->view('templates/footer');
    }

    public function tambahPilgan($ujian_id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->ujian->tambahPilgan($ujian_id);
        redirect('teacher/pilgan/' . $ujian_id);
    }

    public function hapusPilgan($soal_id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->db->delete('soal_pilgan', array('id' => $soal_id));
        redirect('teacher/pilgan/' . $soal_id);
    }
}
