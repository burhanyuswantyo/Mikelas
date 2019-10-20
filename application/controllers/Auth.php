<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Auth extends CI_Controller
{
    public function index($nama = 'Login')
    {
        $data['judul'] = 'Login';
        $this->load->view('auth/login', $data);
    }
}
