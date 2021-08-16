<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_datamateri extends CI_Model
{
    public function show()
    {
        $kueri = $this->db->get('materi');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('materi', $data);
    }

    public function update($id, $data)
    {
        $this->db->update('materi', $data, ['id_materi' => $id]);
    }

    public function detail($id)
    {
        $kueri = $this->db->get_where('materi', ['id_materi' => $id]);
        $hasil = $kueri->result();
        return $hasil;
    }

    public function delete($id)
    {
        $this->db->delete('materi', ['id_materi' => $id]);
    }
}
