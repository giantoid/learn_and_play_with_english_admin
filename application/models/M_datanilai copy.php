<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_datanilai extends CI_Model
{
    public function show()
    {
        $kueri = $this->db->from('nilai a')
            ->join('murid b', 'a.id_murid = b.id_murid')
            ->join('materi c', 'a.id_materi = c.id_materi')
            ->get();
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('nilai', $data);
    }

    public function update($id, $data)
    {
        $this->db->update('nilai', $data, ['id_nilai' => $id]);
    }

    public function detail($id)
    {
        $kueri = $this->db->from('nilai a')
            ->join('murid b', 'a.id_murid = b.id_murid')
            ->join('materi c', 'a.id_materi = c.id_materi')
            ->where('a.id_nilai = ' . $id)
            ->get();
        $hasil = $kueri->result();
        return $hasil;
    }

    public function delete($id)
    {
        $this->db->delete('nilai', ['id_nilai' => $id]);
    }
}
