<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('MahasiswaModel');
    }

    public function index()
    {
        $this->load->view('mahasiswa_view');
    }

    public function getData()
    {
        $data = $this->MahasiswaModel->getAll();

        echo json_encode($data);
    }

    public function simpan()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'prodi' => $this->input->post('prodi')
        );

        $this->MahasiswaModel->simpanData($data);

        echo json_encode(array(
            'status' => 'success'
        ));
    }

}