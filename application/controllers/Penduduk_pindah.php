<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk_pindah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk_pindah_model', 'ppindah');
    }
    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        } else if ($this->session->userdata('username') && $this->session->userdata('level') == 'admin') {
            $data['privilage'] = $this->session->userdata('username');
            $config = [
                [
                    'field' => 'nik',
                    'label' => 'Nik',
                    'rules' => 'required'
                ],
                [
                    'field' => 'tanggal',
                    'label' => 'Tanggal',
                    'rules' => 'required'
                ],
                [
                    'field' => 'namalengkap',
                    'label' => 'Nama lengkap',
                    'rules' => 'required'
                ],
                [
                    'field' => 'asal',
                    'label' => 'Asal',
                    'rules' => 'required'
                ],
                [
                    'field' => 'tujuan',
                    'label' => 'Tujuan',
                    'rules' => 'required'
                ]
            ];
            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('templates/topbar', $data);
                $this->load->view('penduduk_pindah/index');
                $this->load->view('templates/footer');
            } else {
                $this->ppindah->save();
                $this->session->set_flashdata('message', 'tambah');
                redirect('Penduduk_pindah/show');
            }
        } else {
            redirect('Penduduk_pindah/laporan');
        }
    }
    public function show()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        } else if ($this->session->userdata('username') && $this->session->userdata('level') == 'admin') {
            $data['privilage'] = $this->session->userdata('username');
            $data['penduduk'] = $this->ppindah->getAll();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('penduduk_pindah/show', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('Penduduk_pindah/laporan');
        }
    }
    public function edit($id)
    {
        $data['privilage'] = $this->session->userdata('username');
        $data['edit'] = $this->ppindah->edit($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('penduduk_pindah/edit', $data);
        $this->load->view('templates/footer');
    }
    public function editsave($id)
    {
        $this->ppindah->editsave($id);
        $this->session->set_flashdata('message', 'edit');
        redirect('penduduk_pindah/show');
    }
    public function delete($id)
    {
        $this->ppindah->delete($id);
        $this->session->set_flashdata('message', 'hapus');
        redirect('penduduk_pindah/show');
    }
    public function laporan()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');
        $data['data'] = $this->db->get('ppindah')->result_array();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('penduduk_pindah/laporan');
        $this->load->view('templates/footer');
    }
    public function cetaklap()
    {
        $data['data'] = $this->db->get('ppindah')->result_array();
        $this->load->view('templates/header');
        $this->load->view('penduduk_datang/cetak', $data);
        $this->load->view('templates/footer');
    }
}
