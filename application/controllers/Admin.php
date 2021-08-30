<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model', 'admin');
        $this->load->model('Kematian_model', 'kematian');
        $this->load->model('Kelahiran_model', 'kelahiran');
    }
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('Dashboard');
        }
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('admin/index');
            $this->load->view('templates/footer');
        } else {
            $this->admin->login();
            redirect('Dashboard');
        }
    }
    public function logout()
    {
        unset($_SESSION['username']);
        $this->session->unset_userdata('username');
        redirect('Admin');
    }
    public function laporan()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');

        $data['kematian'] = $this->admin->showdatakematian();
        // var_dump($data['kematian'] = $this->admin->showdata());
        // die;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/grafik', $data);
        $this->load->view('templates/footer');
    }
    public function grafikkelahiran()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');

        $data['kelahiran'] = $this->admin->showdatakelahiran();
        // var_dump($data['kematian'] = $this->admin->showdata());
        // die;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/grafikkelahiran', $data);
        $this->load->view('templates/footer');
    }
}
