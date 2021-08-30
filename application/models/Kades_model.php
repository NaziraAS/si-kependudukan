<?php
class Kades_model extends CI_Model
{
    public function save()
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('namakades'),
            'status' => $this->input->post('status')
        ];
        $this->db->insert('kepala_desa', $data);
    }
    public function getAll()
    {
        return $this->db->get('kepala_desa')->result_array();
    }
    public function edit($id)
    {
        return $this->db->get_where('kepala_desa', ['id_kepala_desa' => $id])->row_array();
    }
    public function editsave($id)
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('namakades'),
            'status' => $this->input->post('status')
        ];
        $this->db->where('id_kepala_desa', $id);
        $this->db->update('kepala_desa', $data);
    }
    public function delete($id)
    {
        $this->db->delete('kepala_desa', ['id_kepala_desa' => $id]);
    }
}
