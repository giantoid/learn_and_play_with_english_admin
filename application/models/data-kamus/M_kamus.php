<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kamus extends CI_Model
{
    public function show()
    {
        $kueri = $this->db->get('kamus');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('kamus', $data);
    }

    public function update($id, $data)
    {
        $this->db->update('kamus', $data, ['id_kamus' => $id]);
    }

    public function detail($id)
    {
        $kueri = $this->db->from('kamus a')
            ->join('kategori_kamus b', 'a.id_kategori = b.id_kategori')
            ->where("a.id_kamus = $id")
            ->get();
        $hasil = $kueri->result();
        return $hasil;
    }

    public function delete($id)
    {
        $this->db->delete('kamus', ['id_kamus' => $id]);
    }
}
