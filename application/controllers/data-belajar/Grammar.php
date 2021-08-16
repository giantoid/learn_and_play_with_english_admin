<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grammar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load model m_grammar
        $this->load->model('data-belajar/m_grammar');
    }

    // index
    public function index()
    {
        $data['objects'] = $this->m_grammar->show();
        $this->template->layout('data-belajar/grammar/data', $data);
    }

    // menampilkan form tambah data
    public function tambah()
    {
        $this->template->layout('data-belajar/grammar/add');
    }

    // insert data
    public function insert()
    {
        $post = $this->input->post();
        $this->nama_grammar = $post['nama_grammar'];

        $this->m_grammar->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('data-belajar/grammar'));
        exit;
    }

    // menampilkan form edit data
    public function edit($id)
    {
        $data['data'] = $this->m_grammar->detail($id);
        $this->template->layout('data-belajar/grammar/edit', $data);
    }

    // update data
    public function update()
    {
        $post = $this->input->post();
        $id = $post['id_grammar'];
        $this->nama = $post['nama'];
        $this->kalimat = $post['kalimat'];
        $this->no_grammar = $post['no_grammar'];

        $this->m_grammar->update($id, $this);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('data-belajar/grammar'));
        exit;
    }

    // menampilkan halaman detail
    public function detail($id)
    {
        $data['data'] = $this->m_grammar->detail($id);
        $this->template->layout('data-belajar/grammar/detail', $data);
    }

    // menghapus data
    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];

        $this->m_grammar->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('data-belajar/grammar'));
        exit;
    }
}
