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

    public function ujian()
    {
        $id_peserta = $this->session->userdata('id_peserta');
        //Cek Nomor soal
        $cek_nomor     = $this->M_jawaban->cek_jawaban($id_peserta)->result();
        foreach ($cek_nomor as $cek) {
            $list_soal = $cek->list_soal;
            $list_jawaban = $cek->list_jawaban;
        }
        $jwb = explode(",", $list_soal);
        $no = sizeof($jwb);

        //Jika Melewati No Soal
        if ($no_soal <= 0 or $no_soal > $no) {
            redirect('peserta/ujian_cat/1');
        }

        $data['title']     = "Computer Assisted Test";
        $data['page']         = "ujian_cat";
        $data['informasi']     = $this->M_informasi->data_informasi()->result();

        $id_peserta = $this->session->userdata('id_peserta');
        $data['peserta']    = $this->M_peserta->data_peserta($id_peserta)->result();

        // Data Jawaban
        $data['data_jawaban']     = $this->M_jawaban->cek_jawaban($id_peserta)->result();
        $waktu = $this->M_jawaban->cek_jawaban($id_peserta)->result();
        foreach ($waktu as $wt) {
            $waktu_selesai = $wt->waktu_selesai;
        }
        $data['waktu_selesai'] = $waktu_selesai;


        //Menampilkan Pertanyaan
        $soal_ke = $no_soal - 1;
        $soal = explode(",", $list_jawaban);
        $soal_list = $soal[$soal_ke];
        $soal_list = explode(":", $soal_list);
        $id_pertanyaan = $soal_list[0];

        $data['jawaban_peserta'] = $soal_list[1];
        $data['tampil_soal'] = $this->M_jawaban->list_jawaban($id_pertanyaan)->result();
        $data['no_soal'] = $no_soal;

        $this->load->view('v_peserta/v_app', $data);
        $this->load->view('ujian/ujian');
    }
}
