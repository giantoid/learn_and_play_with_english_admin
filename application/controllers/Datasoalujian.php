<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datasoalujian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_datasoalujian');
    }

    public function index()
    {
        $data['objects'] = $this->m_datasoalujian->show();
        $this->template->layout('datasoalujian/data', $data);
    }

    public function tambah()
    {
        $this->template->layout('datasoalujian/add');
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->id_materi = $post['id_materi'];
        $this->nama_soal = $post['nama_soal'];
        $this->pass_murid = $post['pass_murid'];

        $this->m_datasoalujian->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('datasoalujian'));
        exit;
    }

    public function edit($id)
    {
        $data['data'] = $this->m_datasoalujian->detail($id);
        $this->template->layout('datasoalujian/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $id = $post['id_soal'];
        $this->id_materi = $post['id_materi'];
        $this->nama_soal = $post['nama_soal'];
        $this->pass_murid = $post['pass_murid'];

        $this->m_datasoalujian->update($id, $this);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('datasoalujian'));
        exit;
    }

    public function detail($id)
    {
        $data['data'] = $this->m_datasoalujian->detail($id);
        $this->template->layout('datasoalujian/detail', $data);
    }

    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];

        $this->m_datasoalujian->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('datasoalujian'));
        exit;
    }
}
