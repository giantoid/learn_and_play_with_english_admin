<?php
class M_user extends CI_Model
{

    public function insert($data)
    {
        $this->db->insert('user', $data);
    }

    public function show()
    {
        $kueri = $this->db->get('user');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function detail($id)
    {
        $kueri = $this->db->get_where('user', ['id_user' => $id]);
        $hasil = $kueri->result();
        return $hasil;
    }

    public function update($data, $id)
    {
        $this->db->update('user', $data, ['id_user' => $id]);
    }

    public function delete($id)
    {
        $this->db->delete('user', ['id_user' => $id]);
    }
}
