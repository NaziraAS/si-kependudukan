<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/index');
        $this->load->view('templates/footer');
    }
}
