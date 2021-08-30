<?php
class Menikah_model extends CI_Model
{
    public function save()
    {
        $data = [
            'tempat_menikah' => $this->input->post('tempatmenikah'),
            'tgl_pernikahan' => $this->input->post('tanggalmenikah'),
            'nik_penduduk' => $this->input->post('nik')
        ];
        $this->db->insert('menikah', $data);
    }
    public function getAll()
    {
        return $this->db->get('menikah')->result_array();
    }
    public function edit($id)
    {
        return $this->db->get_where('menikah', ['id_menikah' => $id])->row_array();
    }
    public function editsave($id)
    {
        $data = [
            'nik' => $this->input->post('niksuami'),
            'tempat_menikah' => $this->input->post('tempatmenikah'),
            'tgl_pernikahan' => $this->input->post('tanggalmenikah'),
        ];
        $this->db->where('id_menikah', $id);
        $this->db->update('menikah', $data);
    }
    public function delete($id)
    {
        $this->db->delete('menikah', ['id_menikah' => $id]);
    }
    // get nik from penduduk
    public function getNik()
    {
        return $this->db->get('penduduk')->result_array();
    }
    // get naama buy nik
    public function getNameByNik($nik)
    {
        // return $this->db->get_where('penduduk', ['nik' => $nik])->row_array();
        $query = "SELECT nama from penduduk WHERE nik LIKE '%$nik%'";
        return $this->db->query($query)->row_array();
        // return $this->db->select('*')->from('penduduk')->like('nik', $nik)->row_array();
    }
}
