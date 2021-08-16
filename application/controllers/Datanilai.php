<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datanilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_datanilai');
    }

    public function index()
    {
        $data['objects'] = $this->m_datanilai->show();
        $this->template->layout('datanilai/data', $data);
    }

    public function tambah()
    {
        $this->template->layout('datanilai/add');
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->id_murid = $post['id_murid'];
        $this->id_materi = $post['id_materi'];
        $this->nilai = $post['nilai'];

        $this->m_datanilai->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('datanilai'));
        exit;
    }

    public function edit($id)
    {
        $data['data'] = $this->m_datanilai->detail($id);
        $this->template->layout('datanilai/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $id = $post['id_nilai'];
        $this->id_murid = $post['id_murid'];
        $this->id_materi = $post['id_materi'];
        $this->nilai = $post['nilai'];

        $this->m_datanilai->update($id, $this);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('datanilai'));
        exit;
    }

    public function detail($id)
    {
        $data['data'] = $this->m_datanilai->detail($id);
        $this->template->layout('datanilai/detail', $data);
    }

    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];

        $this->m_datanilai->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('datanilai'));
        exit;
    }
}
