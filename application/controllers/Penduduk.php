<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk_model', 'penduduk');
    }
    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        } else if ($this->session->userdata('username') && $this->session->userdata('level') == 'admin') {
            $data['privilage'] = $this->session->userdata('username');
            $this->form_validation->set_rules('nik', 'Nik', 'required');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            // $this->form_validation->set_rules('kodepos', 'kodepos', 'required');
            $this->form_validation->set_rules('ttl', 'Tempat', 'required');
            $this->form_validation->set_rules('tgl', 'Tanggal', 'required');
            $this->form_validation->set_rules('agama', 'Agama', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required');
            $this->form_validation->set_rules('pendidikan', 'pendidikan', 'required');
            $this->form_validation->set_rules('goldarah', 'Golongan darah', 'required');
            $this->form_validation->set_rules('jeniskelamin', 'Jenis kelamin', 'required');
            $this->form_validation->set_rules('namaayah', 'Nama ayah', 'required');
            $this->form_validation->set_rules('namaibu', 'Nama ibu', 'required');
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('templates/topbar', $data);
                $this->load->view('penduduk/index');
                $this->load->view('templates/footer');
            } else {
                $this->penduduk->save();
                $this->session->set_flashdata('message', 'tambah');
                redirect('penduduk/show');
            }
        } else {
            redirect('Penduduk/laporan');
        }
    }
    public function show()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        } else if ($this->session->userdata('username') && $this->session->userdata('level') == 'admin') {
            $data['privilage'] = $this->session->userdata('username');
            $data['penduduk'] = $this->penduduk->getAll();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('penduduk/show', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('Penduduk/laporan');
        }
    }
    public function laporan()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');
        $data['penduduk'] = $this->penduduk->getAllDate();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('penduduk/laporan', $data);
        $this->load->view('templates/footer');
    }
    public function edit($nik)
    {
        $data['result'] = $this->penduduk->edit($nik);
        $data['privilage'] = $this->session->userdata('username');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('penduduk/edit', $data);
        $this->load->view('templates/footer');
    }
    public function editsave()
    {
        $this->penduduk->editsave();
        $this->session->set_flashdata('message', 'edit');
        redirect('Penduduk/show');
    }
    public function delete($nik)
    {
        $this->penduduk->delete($nik);
        $this->session->set_flashdata('message', 'hapus');
        redirect('penduduk/show');
    }
    public function cetaklap()
    {
        $data['data'] = $this->db->get('penduduk')->result_array();
        $this->load->view('templates/header');
        $this->load->view('penduduk/cetak', $data);
        $this->load->view('templates/footer');
    }
}
