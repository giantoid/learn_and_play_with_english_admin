<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kategori extends CI_Model
{
    public function show()
    {
        $kueri = $this->db->get('kategori_kamus');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('kategori_kamus', $data);
    }

    public function update($id, $data)
    {
        $this->db->update('kategori_kamus', $data, ['id_kategori' => $id]);
    }

    public function detail($id)
    {
        $kueri = $this->db->get_where('kategori_kamus', ['id_kategori' => $id]);
        $hasil = $kueri->result();
        return $hasil;
    }

    public function delete($id)
    {
        $this->db->delete('kategori_kamus', ['id_kategori' => $id]);
    }
}
