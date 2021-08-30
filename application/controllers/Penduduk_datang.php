<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penduduk_datang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk_datang_model', 'pdatang');
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
                $this->load->view('penduduk_datang/index');
                $this->load->view('templates/footer');
            } else {
                $this->pdatang->save();
                $this->session->set_flashdata('message', 'tambah');
                redirect('penduduk_datang/show');
            }
        } else {
            redirect('penduduk_datang/laporan');
        }
    }
    public function edit($id)
    {
        $data['privilage'] = $this->session->userdata('username');
        $data['edit'] = $this->pdatang->edit($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('penduduk_datang/edit', $data);
        $this->load->view('templates/footer');
    }
    public function editsave($id)
    {
        $this->pdatang->editsave($id);
        $this->session->set_flashdata('message', 'edit');
        redirect('penduduk_datang/show');
    }
    public function delete($id)
    {
        $this->pdatang->delete($id);
        $this->session->set_flashdata('message', 'hapus');
        redirect('penduduk_datang/show');
    }
    public function show()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        } else if ($this->session->userdata('username') && $this->session->userdata('level') == 'admin') {
            $data['privilage'] = $this->session->userdata('username');
            $data['penduduk'] = $this->pdatang->getAll();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('penduduk_datang/show', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('penduduk_datang/laporan');
        }
    }
    public function laporan()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['data'] = $this->db->get('pdatang')->result_array();
        $data['privilage'] = $this->session->userdata('username');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('penduduk_datang/laporan');
        $this->load->view('templates/footer');
    }
    public function cetaklap()
    {
        $data['data'] = $this->db->get('pdatang')->result_array();
        $this->load->view('templates/header');
        $this->load->view('penduduk_datang/cetak', $data);
        $this->load->view('templates/footer');
    }
}
