<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_percakapan extends CI_Model
{
    public function show()
    {
        $kueri = $this->db->get('percakapan');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('percakapan', $data);
    }

    public function update($id, $data)
    {
        $this->db->update('percakapan', $data, ['id_percakapan' => $id]);
    }

    public function detail($id)
    {
        $kueri = $this->db->get_where('percakapan', ['id_percakapan' => $id]);
        $hasil = $kueri->result();
        return $hasil;
    }

    public function delete($id)
    {
        $this->db->delete('percakapan', ['id_percakapan' => $id]);
    }
}
