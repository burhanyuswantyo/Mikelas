<?php

class Student_model extends CI_model
{
    public function getAllStudent()
    {
        return $this->db->get('student')->result_array();
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $student = $this->db->get_where('student', ['username' => $username])->row_array();

        if ($student) {
            if ($student['is_active'] == 1) {
                if (password_verify($password, $student['password'])) {
                    $data = [
                        'username' => $student['username'],
                        'nama' => $student['nama']
                    ];
                    $this->session->set_userdata($data);
                    redirect('student');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun belum diaktivasi!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak terdaftar!</div>');
            redirect('auth');
        }
    }

    public function tambah()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'username' => $this->input->post('username', true),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'email' => $this->input->post('email', true),
            'no_hp' => $this->input->post('nohp', true),
            'alamat' => $this->input->post('alamat', true),
            'tgl_lahir' => $this->input->post('tgllahir'),
            'is_active' => 0,
            'date_created' => time(),
            'image' => 'default.jpg'
        ];

        $this->db->insert('student', $data);
    }
}
