<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_api extends CI_Model
{
    public function register($data)
    {
        $this->db->insert('user', $data);
        $kueri = $this->db->get_where('user', ['username' => $data['username']]);
        $hasil = $kueri->result();
        return $hasil;
    }

    public function login($data)
    {
        $cekusername = $this->db->get_where('user', ['username' => $data['username']])->result();
        if (!$cekusername) {
            return 1;
        }

        $cekpassword = $this->db->get_where('user', ['password' => $data['password']])->result();
        if (!$cekpassword) {
            return 2;
        }

        return $cekpassword;
    }

    public function percakapan()
    {
        $kueri = $this->db->get('percakapan');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function kategori()
    {
        $kueri = $this->db->get('kategori_kamus');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function kamus($id)
    {
        $this->db->order_by("english ASC");
        $kueri = $this->db->get_where('kamus', ['id_kategori' => $id]);
        $hasil = $kueri->result();
        return $hasil;
    }

    public function kamusDetail($id)
    {
        $kueri = $this->db->get_where('kamus', ['id_kamus' => $id]);
        $hasil = $kueri->result();
        return $hasil;
    }

    public function alfabet()
    {
        $kueri = $this->db->get('alfabet');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function number()
    {
        $kueri = $this->db->get('number');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function grammar()
    {
        $kueri = $this->db->get('grammar');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function ujian()
    {
        $this->db->order_by('id_soal ASC');
        $kueri = $this->db->get('soal_ujian');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function tebakgambar()
    {
        $kueri = $this->db->from('tebakgambar a')
            ->join("kamus b", "a.id_kamus = b.id_kamus")
            ->order_by('id_tebakgambar ASC')
            ->get();
        $hasil = $kueri->result();
        return $hasil;
    }

    public function jawab($data)
    {
        $this->db->insert('jawaban_ujian', $data);
    }

    public function cekujian($id)
    {
        $kueri = $this->db->get_where('jawaban_ujian', ['id_user' => $id]);
        $hasil = $kueri->result();
        return $hasil;
    }
}
