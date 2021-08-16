<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datakelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_datakelas');
    }

    public function index()
    {
        $data['objects'] = $this->m_datakelas->show();
        $this->template->layout('datakelas/data', $data);
    }

    public function tambah()
    {
        $this->template->layout('datakelas/add');
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->nama_kelas = $post['nama_kelas'];

        $this->m_datakelas->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('datakelas'));
        exit;
    }

    public function edit($id)
    {
        $data['data'] = $this->m_datakelas->detail($id);
        $this->template->layout('datakelas/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $this->nama_kelas = $post['nama_kelas'];

        $this->m_datakelas->update($id, $this);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('datakelas'));
        exit;
    }

    public function detail($id)
    {
        $data['data'] = $this->m_datakelas->detail($id);
        $this->template->layout('datakelas/detail', $data);
    }

    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];

        $this->m_datakelas->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('datakelas'));
        exit;
    }
}
