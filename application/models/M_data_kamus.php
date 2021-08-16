<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data_kamus extends CI_Model
{
    public function show()
    {
        $kueri = $this->db->get('benda');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('benda', $data);
    }

    public function update($id, $data)
    {
        $this->db->update('benda', $data, ['id' => $id]);
    }

    public function detail($id)
    {
        $kueri = $this->db->get_where('benda', ['id' => $id]);
        $hasil = $kueri->result();
        return $hasil;
    }

    public function delete($id)
    {
        $this->db->delete('benda', ['id' => $id]);
    }
}
