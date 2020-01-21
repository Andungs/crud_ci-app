<?php

class Mahasiswa_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllMahasiswa()
    {
        return  $this->db->get('mahasiswa')->result_array();
    }

    public function deleteById($id)
    {
        $this->db->delete('mahasiswa', array('id' => $id));
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', array('id' => $id))->row_array();
    }

    public function tambahData()
    {
        $data = [
            'id' => '',
            'stambuk' => $this->input->post('stambuk', true),
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true)
        ];
        $this->db->insert('mahasiswa', $data);
    }

    public function editDataMahasiswa()
    {
        $id = $this->input->post('id');
        $data = [
            'stambuk' => $this->input->post('stambuk', true),
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true)
        ];

        $this->db->where('id', $id);
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}
