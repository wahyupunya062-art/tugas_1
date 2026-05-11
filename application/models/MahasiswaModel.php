<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MahasiswaModel extends CI_Model {

    public function getAll()
    {
        return $this->db->get('mahasiswa')->result();
    }

    public function simpanData($data)
    {
        $this->db->insert('mahasiswa', $data);
    }

}