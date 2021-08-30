<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepala_desa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kades_model', 'kades');
    }
    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');
        $config = [
            [
                'field' => 'nip',
                'label' => 'Nip',
                'rules' => 'required'
            ],
            [
                'field' => 'namakades',
                'label' => 'Nama kades',
                'rules' => 'required'
            ],
            [
                'field' => 'status',
                'label' => 'status',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('kepala_desa/index');
            $this->load->view('templates/footer');
        } else {
            $this->kades->save();
            $this->session->set_flashdata('message', 'tambah');
            redirect('Kepala_desa/show');
        }
    }
    public function edit($id)
    {
        $data['privilage'] = $this->session->userdata('username');
        $data['edit'] = $this->kades->edit($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('kepala_desa/edit', $data);
        $this->load->view('templates/footer');
    }
    public function editsave($id)
    {
        $this->kades->editsave($id);
        $this->session->set_flashdata('message', 'edit');
        redirect('Kepala_desa/show');
    }
    public function delete($id)
    {
        $this->kades->delete($id);
        $this->session->set_flashdata('message', 'hapus');
        redirect('Kepala_desa/show');
    }
    public function show()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');
        $data['kades'] = $this->kades->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('kepala_desa/show', $data);
        $this->load->view('templates/footer');
    }
    public function laporan()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('kepala_desa/laporan');
        $this->load->view('templates/footer');
    }
}
