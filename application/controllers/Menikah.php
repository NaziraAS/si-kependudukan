<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menikah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menikah_model', 'menikah');
    }
    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        } else if ($this->session->userdata('username') && $this->session->userdata('level') == 'admin') {
            $data['privilage'] = $this->session->userdata('username');
            $data['penduduk'] = $this->menikah->getNik();
            $this->form_validation->set_rules('nik', 'Nik', 'required');
            $this->form_validation->set_rules('tempatmenikah', 'Tempat menikah', 'required');
            $this->form_validation->set_rules('tanggalmenikah', 'Tanggal menikah', 'required');
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('templates/topbar', $data);
                $this->load->view('menikah/index', $data);
                $this->load->view('templates/footer');
            } else {
                $this->menikah->save();
                $this->session->set_flashdata('message', 'tambah');
                redirect('Menikah/show');
            }
        } else {
            redirect('Menikah/laporan');
        }
    }
    public function edit($id)
    {
        $data['edit'] = $this->menikah->edit($id);
        $data['privilage'] = $this->session->userdata('username');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('menikah/edit', $data);
        $this->load->view('templates/footer');
    }
    public function editsave($id)
    {
        $this->menikah->editsave($id);
        $this->session->set_flashdata('message', 'edit');
        redirect('Menikah/show');
    }
    public function delete($id)
    {
        $this->menikah->delete($id);
        $this->session->set_flashdata('message', 'hapus');
        redirect('Menikah/show');
    }

    public function show()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');
        $data['menikah'] = $this->menikah->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('menikah/show', $data);
        $this->load->view('templates/footer');
    }
    public function laporan()
    {
        if (!$this->session->userdata('username')) {
            redirect('Admin');
        }
        $data['privilage'] = $this->session->userdata('username');
        $data['data'] = $this->db->get('menikah')->result_array();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('menikah/laporan');
        $this->load->view('templates/footer');
    }
    public function cetaklap()
    {
        $data['data'] = $this->db->get('menikah')->result_array();
        $this->load->view('templates/header');
        $this->load->view('menikah/cetak', $data);
        $this->load->view('templates/footer');
    }
    public function getNameByNik()
    {
        echo json_encode($this->menikah->getNameByNik($this->input->get('nik')));
    }
}
