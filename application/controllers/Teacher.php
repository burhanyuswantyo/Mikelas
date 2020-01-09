<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Teacher extends CI_Controller
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
        $query = "SELECT *
                  FROM `kelas`
                  WHERE `user_id` = $user_id
                  ORDER BY `nama` ASC
                  ";
        $data['kelas'] = $this->db->query($query)->result_array();

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
        $data['assignment'] = $this->kelas->getAssignment($id);

        $data['judul'] = 'Materi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('teacher/materi');
        $this->load->view('templates/footer');
    }

    public function tambahKomentar($materi_id)
    {
        $user_id = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->kelas->tambahKomentar($user_id['id'], $materi_id);
        redirect('teacher/materi/' . $materi_id);
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
                    WHERE `ujian_id` = $ujian_id
                    ";

        $result = $this->db->query($query)->result_array();

        $data['soal'] = $result;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('teacher/pilgan');
        $this->load->view('templates/footer');
    }

    public function essay($ujian_id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['ujian_id'] = $ujian_id;
        $data['essay'] = $this->db->get_where('soal_essay', ['ujian_id' => $ujian_id])->row_array();
        $data['judul'] = 'Tambah Soal';

        $query = "SELECT `id`, `soal`, `jawaban`
                    FROM `soal_pilgan`
                    WHERE `ujian_id` = $ujian_id
                    ";

        $result = $this->db->query($query)->result_array();

        $data['soal'] = $result;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('teacher/essay');
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

    public function ubahStatus($ujian_id, $is_active)
    {
        $data = array(
            'is_active' => $is_active
        );

        $this->db->where('id', $ujian_id);
        $this->db->update('ujian', $data);

        redirect('teacher/ujian');
    }

    public function tambahEssay($ujian_id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->ujian->tambahEssay($ujian_id);
        redirect('teacher/essay/' . $ujian_id);
    }

    public function hasil($ujian_id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $query = "SELECT `ujian_nilai`.`tanggal`, `user`.`nama`, `ujian_nilai`.`score`, `ujian_nilai`.`keterangan`
                FROM `user`
                JOIN `ujian_nilai`
                ON `user`.`id` = `ujian_nilai`.`user_id`
                WHERE `ujian_nilai`.`ujian_id` = $ujian_id";

        $data['hasil'] = $this->db->query($query)->result_array();

        $data['judul'] = 'Hasil';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('teacher/hasil');
        $this->load->view('templates/footer');
    }
}
