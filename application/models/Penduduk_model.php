<?php
class Penduduk_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('penduduk')->result_array();
    }
    public function save()
    {
        $data = [
            'nik' => $this->input->post('nik', true),
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'tempat_lahir' => $this->input->post('ttl', true),
            'tgl_lahir' => $this->input->post('tgl', true),
            'agama' => $this->input->post('agama', true),
            'status_perkawinan' => $this->input->post('status', true),
            'pekerjaan' => $this->input->post('pekerjaan', true),
            'pendidikan' => $this->input->post('pendidikan', true),
            'golongan_darah' => $this->input->post('goldarah', true),
            'jenis_kelamin' => $this->input->post('jeniskelamin', true),
            'nama_ayah' => $this->input->post('namaayah', true),
            'nama_ibu' => $this->input->post('namaibu', true)
        ];
        $this->db->insert('penduduk', $data);
    }
    public function edit($nik)
    {
        return $this->db->get_where('penduduk', ['nik' => $nik])->row_array();
    }
    public function editsave()
    {
        $niklama = $this->input->post('niklama');
        $data = [
            'nik' => $this->input->post('nik', true),
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'tempat_lahir' => $this->input->post('ttl', true),
            'tgl_lahir' => $this->input->post('tgl', true),
            'agama' => $this->input->post('agama', true),
            'status_perkawinan' => $this->input->post('status', true),
            'pekerjaan' => $this->input->post('pekerjaan', true),
            'pendidikan' => $this->input->post('pendidikan', true),
            'golongan_darah' => $this->input->post('goldarah', true),
            'jenis_kelamin' => $this->input->post('jeniskelamin', true),
            'nama_ayah' => $this->input->post('namaayah', true),
            'nama_ibu' => $this->input->post('namaibu', true)
        ];
        $this->db->where('nik', $niklama);
        $this->db->update('penduduk', $data);
    }
    public function delete($nik)
    {
        $this->db->delete('penduduk', ['nik' => $nik]);
    }
    public function getAllDate()
    {
        return $this->db->get('penduduk')->result_array();
    }
}
