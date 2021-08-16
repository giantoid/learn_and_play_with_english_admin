<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_datasoalujian extends CI_Model
{
    public function show()
    {
        $kueri = $this->db->from('soal_ujian a')
            ->join('materi b', 'a.id_materi = b.id_materi')
            ->get();
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('soal_ujian', $data);
    }

    public function update($id, $data)
    {
        $this->db->update('soal_ujian', $data, ['id_soal' => $id]);
    }

    public function detail($id)
    {
        $kueri = $this->db->from('soal_ujian a')
            ->join('materi b', 'a.id_materi = b.id_materi')
            ->where('a.id_soal = ' . $id)
            ->get();
        $hasil = $kueri->result();
        return $hasil;
    }

    public function delete($id)
    {
        $this->db->delete('soal_ujian', ['id_soal' => $id]);
    }
}
