<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alfabet extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data-belajar/m_alfabet');
    }

    public function index()
    {
        $data['objects'] = $this->m_alfabet->show();
        $this->template->layout('data-belajar/alfabet/data', $data);
    }

    public function tambah()
    {
        $this->template->layout('data-belajar/alfabet/add');
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->nama_alfabet = $post['nama_alfabet'];

        $this->m_alfabet->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('data-belajar/alfabet'));
        exit;
    }

    public function edit($id)
    {
        $data['data'] = $this->m_alfabet->detail($id);
        $this->template->layout('data-belajar/alfabet/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $this->nama_alfabet = $post['nama_alfabet'];

        $this->m_alfabet->update($id, $this);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('data-belajar/alfabet'));
        exit;
    }

    public function detail($id)
    {
        $data['data'] = $this->m_alfabet->detail($id);
        $this->template->layout('data-belajar/alfabet/detail', $data);
    }

    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];

        $this->m_alfabet->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('data-belajar/alfabet'));
        exit;
    }
}
