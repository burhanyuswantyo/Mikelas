<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Ujian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Ujian_model', 'ujian');
    }

    public function pilgan($ujian_id)
    {
        $data['ujian'] = $this->db->get_where('ujian', ['id' => $ujian_id])->row_array();
        $data['judul'] = $this->ujian->getJudulUjian($ujian_id);

        $data['hasil'] = $this->db->get_where('soal_pilgan', ['ujian_id' => $ujian_id])->result_array();
        $data['jumlah'] = $this->db->get_where('soal_pilgan', ['ujian_id' => $ujian_id])->num_rows();
        $data['urut'] = 0;

        if ($data['hasil'] == null) {
            redirect('student/ujian');
        } else {
            $this->load->view('ujian/index', $data);
        }
    }

    public function detail($ujian_id)
    {
        $user_id = $this->session->userdata('user_id');
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Detail';
        $data['ujian'] = $this->ujian->detail($user_id, $ujian_id);
        $data['jumlah'] = $this->db->get_where('soal_pilgan', ['ujian_id' => $ujian_id])->num_rows();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('ujian/detail');
        $this->load->view('templates/footer');
    }

    public function jawab($ujian_id)
    {
        $user_id = $this->session->userdata('user_id');
        $this->ujian->insertNilai($user_id, $ujian_id);
        redirect('student/ujian');
    }

    public function essay($ujian_id)
    {

        $data['ujian'] = $this->db->get_where('ujian', ['id' => $ujian_id])->row_array();
        $data['judul'] = $this->ujian->getJudulUjian($ujian_id);

        $data['hasil'] = $this->db->get_where('soal_essay', ['ujian_id' => $ujian_id])->row_array();
        $data['jumlah'] = $this->db->get_where('soal_essay', ['ujian_id' => $ujian_id])->num_rows();
        $data['urut'] = 0;

        if ($data['hasil'] == null) {
            redirect('student/ujian');
        } else {
            $this->load->view('ujian/essay', $data);
        }
    }

    public function jawabEssay($ujian_id)
    {
        $user_id = $this->session->userdata('user_id');
        $soal = $this->db->get_where('soal_essay', ['ujian_id' => $ujian_id])->row_array();
        $score_min = $this->input->post('score_min');


        $string1 = $soal['jawaban'];
        $string2 = $this->input->post('jawab');

        require("phpCompareStrings.php");
        $phpCompareStrings = new Essay($string2, $string1);
        $score = $phpCompareStrings->getSimilarityPercentage();

        if ($score >= $score_min) {
            $keterangan = 'Lulus';
        } else {
            $keterangan = 'Tidak Lulus';
        }

        $this->ujian->insertNilaiEssay($score, $keterangan, $ujian_id, $user_id);
        redirect('student/ujian');
    }
}
