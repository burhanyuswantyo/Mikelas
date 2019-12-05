<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Soal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['judul'] = 'Soal';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('soal/index');
        $this->load->view('templates/footer');
    }

    public function tambahSoal()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('soal', 'Soal', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Tambah Soal';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('soal/tambah-soal');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'soal' => $this->input->post('soal'),
                'a' => $this->input->post('a'),
                'b' => $this->input->post('b'),
                'c' => $this->input->post('c'),
                'd' => $this->input->post('d'),
                'e' => $this->input->post('e'),
                'jawaban' => $this->input->post('jawaban')
            ];

            $index = 0;
            foreach ($data['soal'] as $dataSoal) {
                array_push($data, array(
                    'soal' => $data['soal'],
                    'a' => $data['a'[$index]],
                    'b' => $data['b'[$index]],
                    'c' => $data['c'[$index]],
                    'd' => $data['d'[$index]],
                    'e' => $data['e'[$index]],
                    'jawaban' => $data['jawaban'[$index]]
                ));
                $index++;
            }
            // $this->db->insert('soal_detail', [
            //     'soal' => $this->input->post('soal'),
            //     'a' => $this->input->post('a'),
            //     'b' => $this->input->post('b'),
            //     'c' => $this->input->post('c'),
            //     'd' => $this->input->post('d'),
            //     'e' => $this->input->post('e'),
            //     'jawaban' => $this->input->post('jawaban')
            // ]);

            // $this->session->set_flashdata('menu', '<div class="alert alert-success" role="alert">Menu berhasil ditambahkan!</div>');
            redirect('soal');
        }
    }
}
