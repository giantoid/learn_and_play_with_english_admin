<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_alfabet extends CI_Model
{
    public function show()
    {
        $kueri = $this->db->get('alfabet');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('alfabet', $data);
    }

    public function update($id, $data)
    {
        $this->db->update('alfabet', $data, ['id_alfabet' => $id]);
    }

    public function detail($id)
    {
        $kueri = $this->db->get_where('alfabet', ['id_alfabet' => $id]);
        $hasil = $kueri->result();
        return $hasil;
    }

    public function delete($id)
    {
        $this->db->delete('alfabet', ['id_alfabet' => $id]);
    }
}
