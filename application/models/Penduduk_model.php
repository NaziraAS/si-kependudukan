<?php
class Penduduk_model extends CI_Model
{
    public function getAll()
    {
        $data = "SELECT `kematian`.`nik`, `status` FROM kematian";
        $status = $this->db->query($data)->row_array()['status'];
        $nik = $this->db->query($data)->row_array()['nik'];
        $data_penduduk = "SELECT `nik` FROM penduduk";
        $nik_penduduk = $this->db->query($data_penduduk)->row_array();
        if (empty($nik_penduduk['nik'])) {
            return $this->db->get('penduduk')->result_array();
        } else {
            if (!empty($status)) {
                if ($nik == $nik_penduduk) {
                    $query = "SELECT `penduduk`.`nik`, `nama`, `alamat`, `tempat_lahir`,
         `tgl_lahir`, `agama`, `status_perkawinan`, `pekerjaan`, 
         `pendidikan`, `golongan_darah`, `jenis_kelamin`, `nama_ayah`,
          `nama_ibu`,`status` FROM `penduduk` JOIN kematian ON penduduk.nik=$nik ";
                    return $this->db->query($query)->result_array();
                } else {
                    return $this->db->get('penduduk')->result_array();
                }
            } else {
                return $this->db->get('penduduk')->result_array();
            }
        }
    }
    public function save()
    {
        $data = [
            'nik' => $this->input->post('nik', true),
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'tempat_lahir' => $this->input->post('ttl', true),
            'tgl_lahir' => $this->input->post('tgl', true),
            'kode_pos' => $this->input->post('kode_pos', true),
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
