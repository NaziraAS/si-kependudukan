<?php
class Admin_model extends CI_Model
{
    public function login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('admin', ['username' => $username])->row_array();
        if ($user['username'] == $username) {
            if ($user['password'] == $password) {
                $data = [
                    'username' => $user['username'],
                    'level' => $user['level'],
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
                    Login berhasil!
                    </div>');
                redirect('Dashboard');
            } else {
                // jika password tidak ada
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password salah!
                </div>');
                redirect('Admin');
            }
        } else {
            // jika usernam tidak ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username tidak ada!
            </div>');
            redirect('Admin');
        }
    }
    // public function login()
    // {
    //     $data = [
    //         [
    //             'username' => 'kades',
    //             'password' => '123',
    //             'level' => 'kades'
    //         ],
    //         [
    //             'username' => 'admin',
    //             'password' => '123',
    //             'level' => 'admin'
    //         ]
    //     ];
    //     foreach ($data) {
    //         var_dump($data);
    //         die;
    //     }
    //     $username = $this->input->post('username');
    //     $password = $this->input->post('password');
    //     foreach ($data as $d) {
    //         if ($username == $d['username']) {
    //             if ($d['password'] == $password) {
    //                 $sess = [
    //                     'username' => $d['username'],
    //                     'level' => $d['level']
    //                 ];
    //                 $this->session->set_userdata($sess);
    //                 redirect('Dashboard');
    //             } else {
    //                 // jika password tidak ada
    //                 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    //                             Password salah!
    //                             </div>');
    //                 redirect('Admin');
    //             }
    //         } else {
    //             // jika usernam tidak ada
    //             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    //                     Username tidak ada!
    //                     </div>');
    //             redirect('Admin');
    //         }
    //     }
    // }
    public function showdatakematian()
    {
        $tahun = $this->input->post('tahun');
        $hasil = [];
        for ($i = 1; $i <= 12; $i++) {
            $this->db->select('COUNT(*) as jumlah, month(tgl_kematian) as bulan');
            $this->db->from('kematian');
            $this->db->where("month(tgl_kematian)", $i);
            $this->db->where("year(tgl_kematian)", $tahun);
            $this->db->group_by("month(tgl_kematian)");
            $this->db->order_by('bulan', 'ASC');
            $query = $this->db->get();
            if (empty($query->row())) {
                array_push($hasil, 0);
            } else {
                array_push($hasil, $query->row('jumlah'));
            }
        }
        return $hasil;
    }
    public function showdatakelahiran()
    {
        $tahun = $this->input->post('tahun');
        $hasil = [];
        for ($i = 1; $i <= 12; $i++) {
            $this->db->select('COUNT(*) as jumlah, month(tgl_lahir) as bulan');
            $this->db->from('kelahiran');
            $this->db->where("month(tgl_lahir)", $i);
            $this->db->where("year(tgl_lahir)", $tahun);
            $this->db->group_by("month(tgl_lahir)");
            $this->db->order_by('bulan', 'ASC');
            $query = $this->db->get();
            if (empty($query->row())) {
                array_push($hasil, 0);
            } else {
                array_push($hasil, $query->row('jumlah'));
            }
        }
        return $hasil;
    }
}
