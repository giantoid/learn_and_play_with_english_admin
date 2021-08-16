<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tebakgambar extends CI_Model
{
    public function show()
    {
        $kueri = $this->db->from('tebakgambar a')
            ->join('kamus b', 'a.id_kamus = b.id_kamus')
            ->get();
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('tebakgambar', $data);
    }

    public function update($id, $data)
    {
        $this->db->update('tebakgambar', $data, ['id_tebakgambar' => $id]);
    }

    public function detail($id)
    {
        $kueri = $this->db->from('tebakgambar a')
            ->join('kamus b', 'a.id_kamus = b.id_kamus')
            ->where("a.id_tebakgambar = $id")
            ->get();
        $hasil = $kueri->result();
        return $hasil;
    }

    public function delete($id)
    {
        $this->db->delete('tebakgambar', ['id_tebakgambar' => $id]);
    }
}
