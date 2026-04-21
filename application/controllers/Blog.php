<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    private $artikel = [
        [
            'id' => 1,
            'judul' => 'Belajar CodeIgniter',
            'isi' => 'Ini adalah artikel pertama'
        ],
        [
            'id' => 2,
            'judul' => 'Belajar MVC',
            'isi' => 'MVC adalah konsep penting dalam pengembangan web'
        ]
    ];

    public function index() {
        $data['artikel'] = $this->artikel;
        $this->load->view('home', $data);
    }

    public function detail($id) {
        foreach ($this->artikel as $a) {
            if ($a['id'] == $id) {
                $data['artikel'] = $a;
            }
        }
        $this->load->view('detail', $data);
    }

    public function tentang() {
        $this->load->view('tentang');
    }

    public function tambah() {
        $this->load->view('tambah');
    }
}