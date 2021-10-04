<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller 
{
    public function index()
    {
        $data['mahasiswa'] = $this->M_mahasiswa->SemuaData();
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('Templates/topbar');
        $this->load->view('Templates/index',$data);
        $this->load->view('Templates/footer');
    }
    public function tambah_data()
    {
        $data['mahasiswa'] = $this->M_mahasiswa->SemuaData();
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('Templates/topbar');
        $this->load->view('home/tambah_data', $data);
        $this->load->view('Templates/footer');
    }
    public function proses_tambah_data()
    {
        $this->M_mahasiswa->proses_tambah_data();
        redirect('Home');
    }
    public function hapus_data($id)
        {
            $this->M_mahasiswa->hapus_data($id);
            redirect('Home');
        }
    
}