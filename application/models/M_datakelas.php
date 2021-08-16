<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_datakelas extends CI_Model
{
    public function show()
    {
        $kueri = $this->db->get('kelas');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('kelas', $data);
    }

    public function update($id, $data)
    {
        $this->db->update('kelas', $data, ['id_kelas' => $id]);
    }

    public function detail($id)
    {
        $kueri = $this->db->get_where('kelas', ['id_kelas' => $id]);
        $hasil = $kueri->result();
        return $hasil;
    }

    public function delete($id)
    {
        $this->db->delete('kelas', ['id_kelas' => $id]);
    }
}
