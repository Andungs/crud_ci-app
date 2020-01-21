<?php

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $data['title'] = 'Tambah Data Mahasiswa';
        $data['jurusan'] = [
            'Teknik Informatika',
            'Teknik Mesin',
            'Pendidikan Dokter',
        ];

        $this->form_validation->set_rules('stambuk', 'Stambuk', 'numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahData();
            $this->session->set_flashdata('flash', 'Berhasil di tambahkan');
            redirect(base_url() . '/mahasiswa');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->deleteById($id);
        $this->session->set_flashdata('flash', 'Berhasil Di Hapus');
        redirect(base_url() . '/mahasiswa');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Mahasiswa';
        $data['jurusan'] = [
            'Teknik Informatika',
            'Teknik Mesin',
            'Pendidikan Dokter',
        ];
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->form_validation->set_rules('stambuk', 'Stambuk', 'numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('templates/footer');
            # code...
        } else {
            $data['mahasiswa'] = $this->Mahasiswa_model->editDataMahasiswa();
            $this->session->set_flashdata('flash', 'Berhasil di edit');
            redirect(base_url() . '/mahasiswa');
        }
    }
}
