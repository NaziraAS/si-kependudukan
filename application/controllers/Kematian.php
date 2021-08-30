<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kematian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kematian_model', 'kematian');
    }
    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        } else if ($this->session->userdata('username') && $this->session->userdata('level') == 'admin') {

            $data['privilage'] = $this->session->userdata('username');
            $this->form_validation->set_rules('nik', 'Nik', 'required');
            $this->form_validation->set_rules('hari', 'Hari', 'required');
            $this->form_validation->set_rules('tgl', 'Tanggal', 'required');
            $this->form_validation->set_rules('jam', 'jam', 'required');
            $this->form_validation->set_rules('tempatkematian', 'Tempat kematian', 'required');
            $this->form_validation->set_rules('umur', 'Umur', 'required');
            $this->form_validation->set_rules('sebabkematian', 'Sebab kematian', 'required');
            $this->form_validation->set_rules('nikibu', 'Nik ibu', 'required');
            $this->form_validation->set_rules('nikayah', 'Nik ayah', 'required');
            $this->form_validation->set_rules('niksaksi', 'Nik saksi', 'required');
            $this->form_validation->set_rules('nikpelapor', 'Nik pelapor', 'required');
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('templates/topbar', $data);
                $this->load->view('kematian/index');
                $this->load->view('templates/footer');
            } else {
                $this->kematian->save();
                $this->session->set_flashdata('message', 'tambah');
                redirect('kematian/show');
            }
        } else {
            redirect('Kematian/laporan');
        }
    }
    public function edit($id)
    {
        $data['privilage'] = $this->session->userdata('username');
        $data['edit'] = $this->kematian->edit($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('kematian/edit', $data);
        $this->load->view('templates/footer');
    }
    public function editsave($id)
    {
        $this->kematian->editsave($id);
        $this->session->set_flashdata('message', 'edit');
        redirect('kematian/show');
    }
    public function delete($id)
    {
        $this->kematian->delete($id);
        $this->session->set_flashdata('message', 'hapus');
        redirect('kematian/show');
    }
    public function show()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');
        $data['kematian'] = $this->kematian->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('kematian/show', $data);
        $this->load->view('templates/footer');
    }
    public function laporan()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');
        $data['data'] = $this->db->get('kematian')->result_array();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('kematian/laporan', $data);
        $this->load->view('templates/footer');
    }
    public function cetaklap()
    {
        $data['data'] = $this->db->get('kematian')->result_array();
        $this->load->view('templates/header');
        $this->load->view('kematian/cetak', $data);
        $this->load->view('templates/footer');
    }
    public function getNamaByNik()
    {
        echo json_encode($this->kematian->getNamaByNik());
    }
}
