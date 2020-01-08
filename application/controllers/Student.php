<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Student extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model', 'user');
        $this->load->model('Ujian_model', 'ujian');
        $this->load->model('Kelas_model', 'kelas');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $user_id = $this->session->userdata('user_id');
        $query = "SELECT `kelas`.`id`, `kelas`.`nama`
                  FROM `kelas`
                  JOIN `kelas_access`
                  ON `kelas`.`id` = `kelas_access`.`kelas_id`
                  JOIN `user`
                  ON `user`.`id` = `kelas_access`.`user_id`
                  WHERE `user`.`id` = $user_id
                  ";
        $data['kelas'] = $this->db->query($query)->result_array();


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

    public function kelas($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['kelas'] = $this->db->get_where('kelas', ['id' => $id])->row_array();
        $user_id = $data['kelas']['user_id'];

        $query = "SELECT `materi`.*, `user`.`nama`, `user`.`image`
                FROM `materi` 
                JOIN `user`
                ON `materi`.`user_id` = `user`.`id`
                WHERE `materi`.`kelas_id` = $id
                AND `materi`.`user_id` = $user_id
                ORDER BY `materi`.`id` DESC
        ";

        $data['materi'] = $this->db->query($query)->result_array();
        $data['judul'] = $data['kelas']['nama'];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('student/kelas');
        $this->load->view('templates/footer');
    }

    public function materi($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['materi'] = $this->db->get_where('materi', ['id' => $id])->row_array();

        $query = "SELECT `materi`.*, `user`.`nama`, `user`.`image`
                FROM `materi` 
                JOIN `user`
                ON `materi`.`user_id` = `user`.`id`
                WHERE `materi`.`id` = $id
        ";

        $data['materi'] = $this->db->query($query)->result_array();
        $data['komentar'] = $this->kelas->getKomentar($id);
        $data['cek'] = $this->db->get_where('materi_assignment', ['user_id' => $this->session->userdata('user_id')])->row_array();

        $data['judul'] = 'Materi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('student/materi');
        $this->load->view('templates/footer');
    }

    public function ujian()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['ujian'] = $this->ujian->getAllUjianStudent($data['user']['id']);
        $data['kelas'] = $this->ujian->getAllKelas($data['user']['id']);
        $data['tipe'] = $this->ujian->getTipeUjian();


        $data['judul'] = 'Ujian';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('student/ujian');
        $this->load->view('templates/footer');
    }

    public function tambahKomentar($materi_id)
    {
        $user_id = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->kelas->tambahKomentar($user_id['id'], $materi_id);
        redirect('student/materi/' . $materi_id);
    }

    public function tambahAssignment($materi_id)
    {
        $user_id = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->kelas->tambahAssignment($user_id['id'], $materi_id);
        redirect('student/materi/' . $materi_id);
    }

    public function hapusAssignment($id, $materi_id)
    {
        $this->db->delete('materi_assignment', array('id' => $id));
        redirect('student/materi/' . $materi_id);
    }

    public function keluarKelas($kelas_id, $user_id)
    {
        $this->db->delete('kelas_access', array('kelas_id' => $kelas_id, 'user_id' => $user_id));
        redirect('student');
    }
}
