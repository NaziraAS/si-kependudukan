<?php
class Kematian_model extends CI_Model
{
    public function save()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'hari' => $this->input->post('hari'),
            'tgl_kematian' => $this->input->post('tgl'),
            'jam' => $this->input->post('jam'),
            'tempat_kematian' => $this->input->post('tempatkematian'),
            'umur' => $this->input->post('umur'),
            'sebab_kematian' => $this->input->post('sebabkematian'),
            'nik_ayah' => $this->input->post('nikayah'),
            'nik_ibu' => $this->input->post('nikibu'),
            'nik_saksi' => $this->input->post('niksaksi'),
            'nik_pelapor' => $this->input->post('nikpelapor'),
        ];
        $this->db->insert('kematian', $data);
    }
    public function getAll()
    {
        return $this->db->get('kematian')->result_array();
    }
    public function edit($id)
    {
        return $this->db->get_where('kematian', ['id_kematian' => $id])->row_array();
    }
    public function editsave($id)
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'hari' => $this->input->post('hari'),
            'tgl_kematian' => $this->input->post('tgl'),
            'jam' => $this->input->post('jam'),
            'tempat_kematian' => $this->input->post('tempatkematian'),
            'umur' => $this->input->post('umur'),
            'sebab_kematian' => $this->input->post('sebabkematian'),
            'nik_ayah' => $this->input->post('nikayah'),
            'nik_ibu' => $this->input->post('nikibu'),
            'nik_saksi' => $this->input->post('niksaksi'),
            'nik_pelapor' => $this->input->post('nikpelapor'),
        ];
        $this->db->where('id_kematian', $id);
        $this->db->update('kematian', $data);
    }
    public function delete($id)
    {
        $this->db->delete('kematian', ['id_kematian' => $id]);
    }
    public function getNamaByNik()
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
