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
        // Photo upload
        $config = array();
        $config['upload_path'] = './upload/photo/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config, 'photo');
        $this->photo->initialize($config);
        $photo['upload'] = $this->photo->do_upload('photo');
        $photo['name'] = $this->photo->data('file_name');


        // File upload
        $config = array();
        $config['upload_path'] = './upload/file/';
        $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|xls|xlsx';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config, 'file');
        $this->file->initialize($config);
        $file['upload'] = $this->file->do_upload('file');
        $file['name'] = $this->file->data('file_name');

        $this->db->insert('materi', [
            'deskripsi' => $this->input->post('deskripsi'),
            'photo' => $photo['name'],
            'file' => $file['name'],
            'video' => $this->input->post('video'),
            'user_id' => $user_id,
            'kelas_id' => $kelas_id
        ]);
    }

    public function editMateri($id)
    {
        $data = array(
            'deskripsi' => $this->input->post('deskripsi'),
            'photo' => $this->input->post('photo'),
            'file' => $this->input->post('file'),
            'video' => $this->input->post('video')
        );

        $this->db->where('id', $id);
        $this->db->update('materi', $data);
    }

    public function getKomentar($materi_id)
    {
        $query = "SELECT `materi_komentar`.*, `user`.`nama`, `user`.`image`
                    FROM `user`
                    JOIN `materi_komentar`
                    ON `user`.`id` = `materi_komentar`.`user_id`
                    JOIN `materi`
                    ON `materi`.`id` = `materi_komentar`.`materi_id`
                    WHERE `materi`.`id` = $materi_id";

        return $this->db->query($query)->result_array();
    }

    public function tambahKomentar($user_id, $materi_id)
    {
        $this->db->insert('materi_komentar', [
            'komentar' => $this->input->post('komentar'),
            'user_id' => $user_id,
            'materi_id' => $materi_id
        ]);
    }

    public function getAssignment($materi_id)
    {
        $query = "SELECT `materi_assignment`.*, `user`.`nama`, `user`.`image`
                    FROM `user`
                    JOIN `materi_assignment`
                    ON `user`.`id` = `materi_assignment`.`user_id`
                    JOIN `materi`
                    ON `materi`.`id` = `materi_assignment`.`materi_id`
                    WHERE `materi`.`id` = $materi_id";

        return $this->db->query($query)->result_array();
    }

    public function tambahAssignment($user_id, $materi_id)
    {
        // Assignment upload
        $config = array();
        $config['upload_path'] = './upload/assignment/';
        $config['allowed_types'] = 'jpg|png|pdf|doc|docx|ppt|pptx|xls|xlsx|rar|zip';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config, 'file');
        $this->file->initialize($config);
        $file['upload'] = $this->file->do_upload('file');
        $file['name'] = $this->file->data('file_name');

        $this->db->insert('materi_assignment', [
            'file' => $file['name'],
            'user_id' => $user_id,
            'materi_id' => $materi_id
        ]);
    }
}
