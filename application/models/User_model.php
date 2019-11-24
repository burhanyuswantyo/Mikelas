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
                        'user_id' => $user['id'],
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
        $email = $this->input->post('email', true);
        $data = [
            'nama' => $this->input->post('nama', true),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'email' => htmlspecialchars($email),
            'no_hp' => $this->input->post('nohp', true),
            'alamat' => $this->input->post('alamat', true),
            'tgl_lahir' => $this->input->post('tgllahir'),
            'role_id' => $this->input->post('role', true),
            'is_active' => 0,
            'date_created' => time(),
            'image' => 'default.jpg'
        ];

        $token = base64_encode(random_bytes(32));
        $user_token = [
            'email' => $email,
            'token' => $token,
            'date_created' => time()
        ];

        $this->db->insert('user', $data);
        $this->User_model->_sendEmail($token, 'verify');
        $this->db->insert('user_token', $user_token);
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'byuswan@gmail.com',
            'smtp_pass' => 'cooler1521',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];
        $this->email->initialize($config);

        $this->email->from('byuswan@gmail.com', 'Mikelas');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Verifikasi Akun Mikelas');
            $this->email->message('Klik link ini untuk verifikasi akun : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">VERIFIKASI</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
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
