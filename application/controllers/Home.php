<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $nama;
        $this->load->view('home/templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('home/templates/footer');

        //test
    }

    public function test()
    {
        echo 'OK';
    }
}