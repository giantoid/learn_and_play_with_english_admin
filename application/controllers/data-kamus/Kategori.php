<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data-kamus/m_kategori');
    }

    public function index()
    {
        $data['objects'] = $this->m_kategori->show();
        $this->template->layout('data-kamus/kategori/data', $data);
    }

    public function tambah()
    {
        $this->template->layout('data-kamus/kategori/add');
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->nama_kategori = $post['nama_kategori'];

        $this->m_kategori->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('data-kamus/kategori'));
        exit;
    }

    public function edit($id)
    {
        $data['data'] = $this->m_kategori->detail($id);
        $this->template->layout('data-kamus/kategori/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $this->nama_kategori = $post['nama_kategori'];

        $this->m_kategori->update($id, $this);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('data-kamus/kategori'));
        exit;
    }

    public function detail($id)
    {
        $data['data'] = $this->m_kategori->detail($id);
        $this->template->layout('data-kamus/kategori/detail', $data);
    }

    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];

        $this->m_kategori->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('data-kamus/kategori'));
        exit;
    }
}
