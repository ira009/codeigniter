<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
    public function proses_tambah_data()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "alamat" => $this->input->post('alamat', true),
        ];
        $this->db->insert('mahasiswa', $data);

    }

    
}