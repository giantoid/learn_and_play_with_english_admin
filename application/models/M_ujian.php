<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ujian extends CI_Model
{
    // menampilkan semua data dari tabel
    public function show()
    {
        $kueri = $this->db->get('soal_ujian');
        $hasil = $kueri->result();
        return $hasil;
    }

    // insert data
    public function insert($data)
    {
        $this->db->insert('soal_ujian', $data);
        // $kueri = $this->db->from('soal_ujian')
        //     ->limit(1)
        //     ->order_by('level DESC')
        //     ->get();
        // $hasil = $kueri->result();
        // for ($i = 0; $i < count($data); $i++) {
        //     $this->db->insert('jawaban_ujian', ['id_soal' => $hasil[0]->id_soal, 'jawaban' => $data[$i]['jawaban'], 'benar' => $data[$i]['benar']]);
        // }
    }

    // update data
    public function update($data, $id)
    {
        $this->db->update('soal_ujian', $data, ['id_soal' => $id]);
    }

    // detail
    public function detail($id)
    {
        $kueri = $this->db->get_where('soal_ujian', ['id_soal' => $id]);
        $hasil = $kueri->result();
        return $hasil;
    }

    // delete
    public function delete($id)
    {
        $this->db->delete('jawaban_ujian', ['id_soal' => $id]);
        $this->db->delete('soal_ujian', ['id_soal' => $id]);
    }

    public function getLevel()
    {
        $kueri = $this->db->from('soal_ujian')
            ->limit(1)
            ->order_by('level DESC')
            ->get();
        $hasil = $kueri->result();

        return $hasil;
    }
}
