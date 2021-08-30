<?php
class Kelahiran_model extends CI_Model
{
    public function save()
    {
        $data = [
            'nama_bayi' => $this->input->post('namabayi'),
            'jenis_kelamin' => $this->input->post('jeniskelamin'),
            'tgl_lahir' => $this->input->post('tgl'),
            'jam' => $this->input->post('jam'),
            'tempat_lahir' => $this->input->post('tempat'),
            'tempat_dilahirkan' => $this->input->post('ttd'),
            'kelahiran_ke' => $this->input->post('kelahiranke'),
            'berat' => $this->input->post('berat'),
            'panjang' => $this->input->post('panjang'),
            'nik_ibu' => $this->input->post('nikibu'),
            'nik_ayah' => $this->input->post('nikayah'),
            'nik_pelapor' => $this->input->post('nikpelapor')
        ];
        $this->db->insert('kelahiran', $data);
    }
    public function edit($id)
    {
        return $this->db->get_where('kelahiran', ['id_kelahiran' => $id])->row_array();
    }
    public function editsave($id)
    {
        $data = [
            'nama_bayi' => $this->input->post('namabayi'),
            'jenis_kelamin' => $this->input->post('jeniskelamin'),
            'tgl_lahir' => $this->input->post('tgl'),
            'jam' => $this->input->post('jam'),
            'tempat_lahir' => $this->input->post('tempat'),
            'tempat_dilahirkan' => $this->input->post('ttd'),
            'kelahiran_ke' => $this->input->post('kelahiranke'),
            'berat' => $this->input->post('berat'),
            'panjang' => $this->input->post('panjang'),
            'nik_ibu' => $this->input->post('nikibu'),
            'nik_ayah' => $this->input->post('nikayah'),
            'nik_pelapor' => $this->input->post('nikpelapor')
        ];
        $this->db->where('id_kelahiran', $id);
        $this->db->update('kelahiran', $data);
    }
    public function delete($id)
    {
        $this->db->delete('kelahiran', ['id_kelahiran' => $id]);
    }
    public function getAll()
    {
        return $this->db->get('kelahiran')->result_array();
    }
    public function getAllData()
    {
        return $this->db->get('kelahiran')->result_array();
    }
    // get nama ibu by nik
    public function getNamaIbuByNik()
    {
        $nik = $this->input->post('nik');
        $query = "SELECT * from penduduk where nik LIKE '%$nik%' ORDER BY nik";
        $data = $this->db->query($query)->result_array();
        if ($data) {
            return $data;
        } else {
            return null;
        }
    }
    // get nama ayah by nik
    public function getNamaAyahByNik()
    {
        $nik = $this->input->post('nik');
        $query = "SELECT * from penduduk where nik LIKE '%$nik%' ORDER BY nik";
        $data = $this->db->query($query)->result_array();
        if ($data) {
            return $data;
        } else {
            return null;
        }
    }
    // get nama ayah by nik
    public function getNamaPelaporByNik()
    {
        $nik = $this->input->post('nik');
        $query = "SELECT * from penduduk where nik LIKE '%$nik%' ORDER BY nik";
        $data = $this->db->query($query)->result_array();
        if ($data) {
            return $data;
        } else {
            return null;
        }
    }
}
