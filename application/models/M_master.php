<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_master extends CI_Model
{
    public function kelas()
    {
        $kueri = $this->db->get('kelas');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function materi()
    {
        $kueri = $this->db->get('materi');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function murid()
    {
        $kueri = $this->db->get('murid');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function kamus()
    {
        $kueri = $this->db->get('kamus');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function kategori_kamus()
    {
        $kueri = $this->db->get('kategori_kamus');
        $hasil = $kueri->result();
        return $hasil;
    }
}
