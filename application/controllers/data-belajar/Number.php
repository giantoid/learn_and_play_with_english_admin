<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Number extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data-belajar/m_number');
    }

    public function index()
    {
        $data['objects'] = $this->m_number->show();
        $this->template->layout('data-belajar/number/data', $data);
    }

    public function tambah()
    {
        $this->template->layout('data-belajar/number/add');
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->nama_number = $post['nama_number'];

        $this->m_number->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('data-belajar/number'));
        exit;
    }

    public function edit($id)
    {
        $data['data'] = $this->m_number->detail($id);
        $this->template->layout('data-belajar/number/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $this->nama_number = $post['nama_number'];

        $this->m_number->update($id, $this);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('data-belajar/number'));
        exit;
    }

    public function detail($id)
    {
        $data['data'] = $this->m_number->detail($id);
        $this->template->layout('data-belajar/number/detail', $data);
    }

    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];

        $this->m_number->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('data-belajar/number'));
        exit;
    }
}
