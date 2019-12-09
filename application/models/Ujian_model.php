<?php

class Ujian_model extends CI_model
{
    public function getAllUjian($user_id)
    {
        $query = "SELECT `ujian`.*, `kelas`.`nama`, `ujian_tipe`.`tipe`
                FROM `ujian` 
                JOIN `kelas`
                ON `ujian`.`kelas_id` = `kelas`.`id`
                JOIN `user`
                ON `user`.`id` = `kelas`.`user_id`
                JOIN `ujian_tipe`
                ON `ujian_tipe`.`id` = `ujian`.`tipe_id`
                WHERE `ujian`.`user_id` = $user_id
        ";

        return $this->db->query($query)->result_array();
    }

    public function getTipeUjian()
    {
        return $this->db->get('ujian_tipe')->result_array();
    }

    public function buatUjian($user_id)
    {
        $data = [
            'judul' => $this->input->post('judul'),
            'score_min' => $this->input->post('skor'),
            'kelas_id' => $this->input->post('kelas_id'),
            'user_id' => $user_id,
            'is_active' => 0,
            'tipe_id' => $this->input->post('tipe_id')
        ];

        $this->db->insert('ujian', $data);
    }

    public function getAllKelas($user_id)
    {
        $query = "SELECT *
                FROM `kelas` 
                WHERE `user_id` = $user_id
        ";

        return $this->db->query($query)->result_array();
    }



    public function getAllPilgan($ujian_id)
    {
        $query = "SELECT *
                    FROM `soal_pilgan` 
                    WHERE `ujian_id` = $ujian_id
        ";

        return $this->db->query($query)->result_array();
    }

    public function tambahPilgan($ujian_id)
    {
        $data = [
            'soal' => $this->input->post('soal'),
            'gambar' => $this->input->post('gambar'),
            'a' => $this->input->post('a'),
            'b' => $this->input->post('b'),
            'c' => $this->input->post('c'),
            'd' => $this->input->post('d'),
            'e' => $this->input->post('e'),
            'jawaban' => $this->input->post('jawaban'),
            'ujian_id' => $ujian_id
        ];

        $this->db->insert('soal_pilgan', $data);
    }

    // Student

    public function getAllUjianStudent($user_id)
    {
        $query = "SELECT `ujian`.`id`, `ujian`.`judul`, `kelas`.`nama`
        FROM `ujian`
        JOIN `kelas`
        ON `ujian`.`kelas_id` = `kelas`.`id`
        JOIN `kelas_access`
        ON `kelas`.`id` = `kelas_access`.`kelas_id`
        WHERE `kelas_access`.`user_id`= $user_id
        ";

        return $this->db->query($query)->result_array();
    }
}
