<?php

class Keberangkatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Keberangkatan_model');
        $this->load->model('Bus_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Jadwal Keberangkatan';
        $data['keberangkatan'] = $this->Keberangkatan_model->getAllKeberangkatan();

        $this->load->view('templates/header', $data);
        $this->load->view('Keberangkatan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Jadwal Keberangkatan';

        $this->form_validation->set_rules('id_keberangkatan', 'Id Keberangkatan', 'required');
        $this->form_validation->set_rules('id_bus', 'Id Bus', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('tanggal_keberangkatan', 'Tanggal Keberangkatan', 'required');
        $this->form_validation->set_rules('jam_keberangkatan', 'Jam Keberangkatan', 'required');
        $this->form_validation->set_rules('rute_awal', 'Rute Awal', 'required');
        $this->form_validation->set_rules('rute_tujuan', 'Rute Akhir', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('keberangkatan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Keberangkatan_model->tambahDataKeberangkatan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('keberangkatan');
        }
    }

    public function hapus($id_keberangkatan)
    {
        $this->Keberangkatan_model->hapusDataKeberangkatan($id_keberangkatan);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('keberangkatan');
    }

    public function detail($id_keberangkatan)
    {
        $data['judul'] = 'Detail Data Jadwal Keberangkatan';
        $data['keberangkatan'] = $this->Keberangkatan_model->getKeberangkatanById($id_keberangkatan);
        $this->load->view('templates/header', $data);
        $this->load->view('keberangkatan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_keberangkatan)
    {
        $data['judul'] = 'Form Ubah Jadwal Keberangkatan';
        $data['keberangkatan'] = $this->Keberangkatan_model->getKeberangkatanById($id_keberangkatan);
      
        
        $this->form_validation->set_rules('id_bus', 'Id Bus', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('tanggal_keberangkatan', 'Tanggal Keberangkatan', 'required');
        $this->form_validation->set_rules('jam_keberangkatan', 'Jam Keberangkatan', 'required');
        $this->form_validation->set_rules('rute_awal', 'Rute Awal', 'required');
        $this->form_validation->set_rules('rute_tujuan', 'Rute Akhir', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('keberangkatan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Keberangkatan_model->ubahDataKeberangkatan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('keberangkatan');
        }
    }
    
}
