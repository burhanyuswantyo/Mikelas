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
        $user_id = $this->session->userdata('user_id');
        $data['ujian'] = $this->db->get_where('ujian', ['id' => $ujian_id])->row_array();
        $data['judul'] = $this->ujian->getJudulUjian();
        // var_dump($data['ujian']);
        // die;

        $this->load->view('ujian/index', $data);
    }
}
