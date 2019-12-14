<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    public function getMateri($kelas_id, $user_id)
    {
        $query = "SELECT `materi`.*, `user`.`nama`
                FROM `materi` 
                JOIN `user`
                ON `materi`.`user_id` = `user`.`id`
                WHERE `materi`.`kelas_id` = $kelas_id
                AND `materi`.`user_id` = $user_id
                ORDER BY `materi`.`id` DESC
        ";

        return $this->db->query($query)->result_array();
    }

    public function tambahMateri($kelas_id, $user_id)
    {
        // Cover upload
        $config = array();
        $config['upload_path'] = base_url('upload/photo/');
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config, 'photo'); // Create custom object for cover upload
        $this->photo->initialize($config);
        $photo = $this->photo->do_upload('photo');

        // Catalog upload
        $config = array();
        $config['upload_path'] = base_url('upload/file/');;
        $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|xls|xlsx';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config, 'file');  // Create custom object for catalog upload
        $this->file->initialize($config);
        $file = $this->file->do_upload('file');

        $this->db->insert('materi', [
            'deskripsi' => $this->input->post('deskripsi'),
            'photo' => $this->input->post('photo'),
            'file' => $this->input->post('file'),
            'video' => $this->input->post('video'),
            'user_id' => $user_id,
            'kelas_id' => $kelas_id
        ]);
    }
}
