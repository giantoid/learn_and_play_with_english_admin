<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Percakapan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load model m_percakapan
        $this->load->model('data-belajar/m_percakapan');
    }

    public function index()
    {
        $data['objects'] = $this->m_percakapan->show();
        $this->template->layout('data-belajar/percakapan/data', $data);
    }

    public function tambah()
    {
        $this->template->layout('data-belajar/percakapan/add');
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->nama = $post['nama'];
        $this->kalimat = $post['kalimat'];
        $this->no_percakapan = $post['no_percakapan'];

        $this->m_percakapan->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('data-belajar/percakapan'));
        exit;
    }

    public function edit($id)
    {
        $data['data'] = $this->m_percakapan->detail($id);
        $this->template->layout('data-belajar/percakapan/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $id = $post['id_percakapan'];
        $this->nama = $post['nama'];
        $this->kalimat = $post['kalimat'];
        $this->no_percakapan = $post['no_percakapan'];

        $this->m_percakapan->update($id, $this);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('data-belajar/percakapan'));
        exit;
    }

    public function detail($id)
    {
        $data['data'] = $this->m_percakapan->detail($id);
        $this->template->layout('data-belajar/percakapan/detail', $data);
    }

    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];

        $this->m_percakapan->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('data-belajar/percakapan'));
        exit;
    }
}
