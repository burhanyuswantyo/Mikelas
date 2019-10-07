<?php

class Siswa_model extends CI_model{
    public function getAllSiswa()
    {
        return $this->db->get('tbl_siswa')->result_array();
    }

    public function tambahDataSiswa(){
        $data = array(
            'namadepan' => $this->input->post('namadepan', true),
            'username' => $this->input->post('username', true),
            'password' => $this->input->post('password', true),
            'email' => $this->input->post('email', true),
            'nohp' => $this->input->post('nohp', true),
            'alamat' => $this->input->post('alamat', true)
    );
    
    $this->db->insert('tbl_siswa', $data);
    // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
    }
}