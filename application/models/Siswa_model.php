<?php

class Siswa_model extends CI_model{
    public function getAllSiswa()
    {
        return $this->db->get('tbl_siswa')->result_array();
    }
}