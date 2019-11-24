<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Kelas extends CI_Controller
{
    public function index($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['kelas'] = $this->db->get_where('kelas', ['id' => $id])->row_array();
        $kelas = $this->db->get_where('kelas', ['id' => $id])->row_array();
        $user_id = $this->session->userdata('user_id');
        // $query = "SELECT *
        //         FROM `materi`
        //         WHERE `kelas_id` = $id
        //         AND `user_id` = $user_id
        // ";
        $query = "SELECT `materi`.*, `user`.`nama`
                FROM `materi` 
                JOIN `user`
                ON `materi`.`user_id` = `user`.`id`
                WHERE `materi`.`kelas_id` = $id
                AND `materi`.`user_id` = $user_id
        ";

        $data['materi'] = $this->db->query($query)->result_array();

        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = $kelas['nama'];
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('kelas/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('materi', [
                'deskripsi' => $this->input->post('deskripsi'),
                'file' => $this->input->post('file'),
                'video' => $this->input->post('video'),
                'user_id' => $kelas['user_id'],
                'kelas_id' => $kelas['id']
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Materi berhasil dibagikan!</div>');
            redirect('kelas/index/' . $kelas['id']);
        }
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
