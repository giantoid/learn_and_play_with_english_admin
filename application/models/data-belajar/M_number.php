<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_number extends CI_Model
{
    public function show()
    {
        $kueri = $this->db->get('number');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('number', $data);
    }

    public function update($id, $data)
    {
        $this->db->update('number', $data, ['id_number' => $id]);
    }

    public function detail($id)
    {
        $kueri = $this->db->get_where('number', ['id_number' => $id]);
        $hasil = $kueri->result();
        return $hasil;
    }

    public function delete($id)
    {
        $this->db->delete('number', ['id_number' => $id]);
    }
}
