<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tebakgambar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tebakgambar');
    }

    public function index()
    {
        $data['objects'] = $this->m_tebakgambar->show();
        $this->template->layout('tebakgambar/data', $data);
    }

    public function tambah()
    {
        $this->template->layout('tebakgambar/add');
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->id_kamus = $post['id_kamus'];

        $this->m_tebakgambar->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('tebakgambar'));
        exit;
    }

    public function edit($id)
    {
        $data['data'] = $this->m_tebakgambar->detail($id);
        $this->template->layout('tebakgambar/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $this->id_kamus = $post['id_kamus'];

        $this->m_tebakgambar->update($id, $this);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('tebakgambar'));
        exit;
    }

    public function detail($id)
    {
        $data['data'] = $this->m_tebakgambar->detail($id);
        $this->template->layout('tebakgambar/detail', $data);
    }

    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];

        $this->m_tebakgambar->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('tebakgambar'));
        exit;
    }
}
