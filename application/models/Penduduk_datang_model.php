<?php
class Penduduk_datang_model extends CI_Model
{
    public function save()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'tgl' => $this->input->post('tanggal'),
            'nama' => $this->input->post('namalengkap'),
            'alamat_asal' => $this->input->post('asal'),
            'nomor_surat' => $this->input->post('nosurat')
        ];
        $this->db->insert('pdatang', $data);
    }
    public function getAll()
    {
        return $this->db->get('pdatang')->result_array();
    }
    public function edit($id)
    {
        return $this->db->get_where('pdatang', ['id' => $id])->row_array();
    }
    public function editsave($id)
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'tgl' => $this->input->post('tanggal'),
            'nama' => $this->input->post('namalengkap'),
            'alamat_asal' => $this->input->post('asal'),
            'nomor_surat' => $this->input->post('nosurat')
        ];
        $this->db->where('id', $id);
        $this->db->update('pdatang', $data);
    }
    public function delete($id)
    {
        $this->db->delete('pdatang', ['id' => $id]);
    }
}
