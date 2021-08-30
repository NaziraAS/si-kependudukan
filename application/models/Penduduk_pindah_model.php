<?php
class Penduduk_pindah_model extends CI_Model
{
    public function save()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'tgl' => $this->input->post('tanggal'),
            'nama' => $this->input->post('namalengkap'),
            'alamat_asal' => $this->input->post('asal'),
            'alamat_tujuan' => $this->input->post('tujuan'),
            'nomor_surat' => $this->input->post('nosurat'),
            'alasan' => $this->input->post('alasan')
        ];
        $this->db->insert('ppindah', $data);
    }

    public function getAll()
    {
        return $this->db->get('ppindah')->result_array();
    }
    public function edit($id)
    {
        return $this->db->get_where('ppindah', ['id' => $id])->row_array();
    }
    public function editsave($id)
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'tgl' => $this->input->post('tanggal'),
            'nama' => $this->input->post('namalengkap'),
            'alamat_asal' => $this->input->post('asal'),
            'nomor_surat' => $this->input->post('nosurat'),
            'alasan' => $this->input->post('alasan')
        ];
        $this->db->where('id', $id);
        $this->db->update('ppindah', $data);
    }
    public function delete($id)
    {
        $this->db->delete('ppindah', ['id' => $id]);
    }
}
