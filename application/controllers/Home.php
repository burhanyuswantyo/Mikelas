<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Home extends CI_Controller
{
    public function index($nama = 'Home')
    {
        $data['judul'] = 'Home';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');

        //test
    }

    public function test()
    {
        echo 'OK';
    }
}
