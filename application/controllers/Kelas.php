<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Kelas_model', 'kelas');
    }

    public function index($kelas_id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['kelas'] = $this->db->get_where('kelas', ['id' => $kelas_id])->row_array();
        $kelas = $this->db->get_where('kelas', ['id' => $kelas_id])->row_array();
        $user_id = $this->session->userdata('user_id');
        $data['materi'] = $this->kelas->getMateri($kelas_id, $user_id);

        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = $kelas['nama'];
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('kelas/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->tambahMateri($kelas_id);
        }
    }

    public function tambahMateri($kelas_id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['kelas'] = $this->db->get_where('kelas', ['id' => $kelas_id])->row_array();
        $kelas = $this->db->get_where('kelas', ['id' => $kelas_id])->row_array();
        $user_id = $this->session->userdata('user_id');

        $this->kelas->tambahMateri($kelas_id, $user_id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Materi berhasil dibagikan!</div>');
        redirect('kelas/index/' . $kelas['id']);
    }

    public function editMateri($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['materi'] = $this->db->get_where('materi', ['id' => $id])->row_array();

        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Edit Materi';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('kelas/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->kelas->editMateri($id);
        }
    }

    public function hapusMateri($id, $kelas_id)
    {

        $this->db->delete('materi', array('id' => $id));
        redirect('kelas/index/' . $kelas_id);
    }

    public function hapusKelas($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->db->delete('kelas', array('id' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas berhasil dihapus!</div>');
        redirect('teacher');
    }

    public function editKelas($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $nama = $this->input->post('nama');
        $data = array(
            'nama' => $nama
        );

        $this->db->where('id', $id);
        $this->db->update('kelas', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas berhasil dihapus!</div>');
        redirect('teacher');
    }
}
