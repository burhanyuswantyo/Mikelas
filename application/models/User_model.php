<?php

class User_model extends CI_model
{
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else if ($user['role_id'] == 2) {
                        redirect('teacher');
                    } else if ($user['role_id'] == 3) {
                        redirect('student');
                    }
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
            'role' => $this->input->post('role', true),
            'is_active' => 0,
            'date_created' => time(),
            'image' => 'default.jpg'
        ];

        $this->db->insert('user', $data);
    }

    public function tambahRole()
    {
        $data = [
            'role' => $this->input->post('role', true),
        ];

        $this->db->insert('user_role', $data);
    }

    public function hapusRole($id)
    {
        $this->db->delete('user_role', array('id' => $id));
    }

    public function ubahRole($id)
    {
        $role = $this->input->post('role');
        $data = array(
            'role' => $role
        );

        $this->db->where('id', $id);
        $this->db->update('user_role', $data);
    }
}
