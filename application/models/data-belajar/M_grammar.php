<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_grammar extends CI_Model
{
    // menampilkan semua data dari tabel
    public function show()
    {
        $kueri = $this->db->get('grammar');
        $hasil = $kueri->result();
        return $hasil;
    }

    // insert data
    public function insert($data)
    {
        $this->db->insert('grammar', $data);
    }

    // update data
    public function update($id, $data)
    {
        $this->db->update('grammar', $data, ['id_grammar' => $id]);
    }

    // detail
    public function detail($id)
    {
        $kueri = $this->db->get_where('grammar', ['id_grammar' => $id]);
        $hasil = $kueri->result();
        return $hasil;
    }

    // delete
    public function delete($id)
    {
        $this->db->delete('grammar', ['id_grammar' => $id]);
    }
}
