<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelahiran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelahiran_model', 'kelahiran');
    }
    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        } else if ($this->session->userdata('username') && $this->session->userdata('level') == 'admin') {

            $data['privilage'] = $this->session->userdata('username');
            $this->form_validation->set_rules('namabayi', 'Nama bayi', 'required');
            $this->form_validation->set_rules('tempat', 'Tempat lahir', 'required');
            $this->form_validation->set_rules('tgl', 'tanggal lahir', 'required');
            $this->form_validation->set_rules('jeniskelamin', 'Jenis kelamin', 'required');
            $this->form_validation->set_rules('jam', 'jam', 'required');
            $this->form_validation->set_rules('panjang', 'Panjang', 'required');
            $this->form_validation->set_rules('berat', 'berat', 'required');
            $this->form_validation->set_rules('ttd', 'Tempat di lahirkan', 'required');
            $this->form_validation->set_rules('kelahiranke', 'kelahiranke', 'required');
            $this->form_validation->set_rules('nikibu', 'Nik ibu', 'required');
            $this->form_validation->set_rules('nikayah', 'Nik ayah', 'required');
            $this->form_validation->set_rules('nikpelapor', 'Nik pelapor', 'required');
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('templates/topbar', $data);
                $this->load->view('kelahiran/index');
                $this->load->view('templates/footer');
            } else {
                $this->kelahiran->save();
                $this->session->set_flashdata('message', 'tambah');
                redirect('kelahiran/show');
            }
        } else {
            redirect('Kelahiran/laporan');
        }
    }
    public function edit($id)
    {
        $data['edit'] = $this->kelahiran->edit($id);
        $data['privilage'] = $this->session->userdata('username');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelahiran/edit', $data);
        $this->load->view('templates/footer');
    }
    public function editsave($id)
    {
        $this->kelahiran->editsave($id);
        $this->session->set_flashdata('message', 'edit');
        redirect('kelahiran/show');
    }
    public function delete($id)
    {
        $this->kelahiran->delete($id);
        $this->session->set_flashdata('message', 'hapus');
        redirect('kelahiran/show');
    }
    public function show()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');
        $data['kelahiran'] = $this->kelahiran->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelahiran/show', $data);
        $this->load->view('templates/footer');
    }
    public function laporan()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');
        $data['kelahiran'] = $this->kelahiran->getAllData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelahiran/laporan', $data);
        $this->load->view('templates/footer');
    }
    public function cetaklap()
    {
        $data['data'] = $this->db->get('kelahiran')->result_array();
        $this->load->view('templates/header');
        $this->load->view('kelahiran/cetak', $data);
        $this->load->view('templates/footer');
    }
    // get nama ibu by nik
    public function getNamaIbuByNik()
    {
        echo json_encode($this->kelahiran->getNamaIbuByNik());
    }
    // get nama ayah by nik
    public function getNamaAyahByNik()
    {
        echo json_encode($this->kelahiran->getNamaAyahByNik());
    }
    // get nama pelapor by nik
    public function getNamaPelaporByNik()
    {
        echo json_encode($this->kelahiran->getNamaPelaporByNik());
    }
}
