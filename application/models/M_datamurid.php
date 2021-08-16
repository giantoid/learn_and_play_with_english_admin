<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_datamurid extends CI_Model
{
    public function show()
    {
        $kueri = $this->db->from('murid a')
            ->join('kelas b', 'a.id_kelas = b.id_kelas')
            ->get();
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('murid', $data);
    }

    public function update($id, $data)
    {
        $this->db->update('murid', $data, ['id_murid' => $id]);
    }

    public function detail($id)
    {
        $kueri = $this->db->from('murid a')
            ->join('kelas b', 'a.id_kelas = b.id_kelas')
            ->where('a.id_murid = ' . $id)
            ->get();
        $hasil = $kueri->result();
        return $hasil;
    }

    public function delete($id)
    {
        $this->db->delete('murid', ['id_murid' => $id]);
    }
}
