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
        $query = "SELECT `ujian`.*, `kelas`.`nama`, `ujian_nilai`.`id` AS hasil
        FROM `ujian`
        JOIN `kelas`
        ON `ujian`.`kelas_id` = `kelas`.`id`
        JOIN `kelas_access`
        ON `kelas`.`id` = `kelas_access`.`kelas_id`
        LEFT JOIN `ujian_nilai`
        ON `ujian_nilai`.`ujian_id` = `ujian`.`id`
        WHERE `kelas_access`.`user_id`= $user_id
        AND `ujian`.`is_active` = 1";

        return $this->db->query($query)->result_array();
    }

    public function getJudulUjian($ujian_id)
    {
        $query = "SELECT `ujian`.`judul`, `kelas`.`nama`
        FROM `ujian`
        JOIN `kelas`
        ON `ujian`.`kelas_id` = `kelas`.`id`
        WHERE `ujian`.`id` = $ujian_id";

        return $this->db->query($query)->row_array();
    }

    public function insertNilai($user_id, $ujian_id)
    {
        $pilihan = $this->input->post('pilihan');
        $soal_id = $this->input->post('id');
        $jumlah = $this->input->post('jumlah');
        $score_min = $this->input->post('score_min');

        $score = 0;
        $benar = 0;
        $salah = 0;
        $kosong = 0;

        for ($i = 0; $i < $jumlah; $i++) {
            $nomor = $soal_id[$i];
            if (empty($pilihan[$nomor])) {
                $kosong++;
            } else {
                $jawaban = $pilihan[$nomor];
                $cek = $this->db->where('id', $nomor)->where('jawaban', $jawaban)->get('soal_pilgan')->num_rows();

                if ($cek) {
                    $benar++;
                } else {
                    $salah++;
                }
            }
        }

        $jumlah_soal = $this->db->get_where('soal_pilgan', ['ujian_id' => $ujian_id])->num_rows();
        $score =  number_format(100 / $jumlah_soal * $benar, 1);
        if ($score >= $score_min) {
            $keterangan = 'Lulus';
        } else {
            $keterangan = 'Tidak Lulus';
        }


        $data = [
            'benar' => $benar,
            'salah' => $salah,
            'kosong' => $kosong,
            'score' => $score,
            'tanggal' => time(),
            'keterangan' => $keterangan,
            'user_id' => $user_id,
            'ujian_id' => $ujian_id
        ];

        $this->db->insert('ujian_nilai', $data);
    }

    public function detail($user_id, $ujian_id)
    {
        $query = "SELECT `kelas`.`nama`, `ujian`.`judul`, `ujian`.`score_min`, `ujian_nilai`.`benar`, `ujian_nilai`.`salah`, `ujian_nilai`.`kosong`, `ujian_nilai`.`score`, `ujian_nilai`.`tanggal`, `ujian_nilai`.`keterangan`
                    FROM `kelas`
                    JOIN `ujian`
                    ON `kelas`.`id` = `ujian`.`kelas_id`
                    JOIN `ujian_nilai`
                    ON `ujian_nilai`.`ujian_id` = `ujian`.`id`
                    JOIN `user`
                    ON `user`.`id` = `ujian_nilai`.`user_id`
                    WHERE `user`.`id` = $user_id
                    AND `ujian`.`id` = $ujian_id";

        return $this->db->query($query)->row_array();
    }

    public function tambahEssay($ujian_id)
    {
        $data = [
            'soal' => $this->input->post('soal'),
            'jawaban' => $this->input->post('jawaban'),
            'ujian_id' => $ujian_id
        ];

        $this->db->insert('soal_essay', $data);
    }

    public function insertNilaiEssay($score, $keterangan, $ujian_id, $user_id)
    {
        $data = [
            'score' => $score,
            'tanggal' => time(),
            'keterangan' => $keterangan,
            'user_id' => $user_id,
            'ujian_id' => $ujian_id
        ];

        $this->db->insert('ujian_nilai', $data);
    }
}
