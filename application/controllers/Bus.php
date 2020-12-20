<?php

class Bus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bus_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Bus';
        $data['bus'] = $this->Bus_model->getAllBus();
       
        $this->load->view('templates/header', $data);
        $this->load->view('bus/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Bus';

        $this->form_validation->set_rules('id_bus', 'Id Bus', 'required');
        $this->form_validation->set_rules('no_polis', 'No Polis', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas Bus', 'required');
        $this->form_validation->set_rules('nama_supir', 'Nama Supir', 'required');
        $this->form_validation->set_rules('nama_kenek', 'Nama Kenek', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('bus/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Bus_model->tambahDataBus();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('bus');
        }
    }

    public function hapus($id_bus)
    {
        $this->Bus_model->hapusDataBus($id_bus);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('bus');
    }

    public function detail($id_bus)
    {
        $data['judul'] = 'Detail Data Bus';
        $data['bus'] = $this->Bus_model->getBusById($id_bus);
        $this->load->view('templates/header', $data);
        $this->load->view('bus/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_bus)
    {
        $data['judul'] = 'Form Ubah Data Bus';
        $data['bus'] = $this->Bus_model->getBusById($id_bus);
        
       
        $this->form_validation->set_rules('no_polis', 'No Polis', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas Bus', 'required');
        $this->form_validation->set_rules('nama_supir', 'Nama Supir', 'required');
        $this->form_validation->set_rules('nama_kenek', 'Nama Kenek', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('bus/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Bus_model->ubahDataBus();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('bus');
        }
    }

}
