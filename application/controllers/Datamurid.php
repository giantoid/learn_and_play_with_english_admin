<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datamurid extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_datamurid');
    }

    public function index()
    {
        $data['objects'] = $this->m_datamurid->show();
        $this->template->layout('datamurid/data', $data);
    }

    public function tambah()
    {
        $this->template->layout('datamurid/add');
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->id_murid = $post['id_murid'];
        $this->id_kelas = $post['id_kelas'];
        $this->nama_murid = $post['nama_murid'];
        $this->username = $post['username'];
        $this->pass_murid = md5($post['pass_murid']);

        $this->m_datamurid->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('datamurid'));
        exit;
    }

    public function edit($id)
    {
        $data['data'] = $this->m_datamurid->detail($id);
        $this->template->layout('datamurid/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $id = $post['id_murid'];
        $this->id_kelas = $post['id_kelas'];
        $this->nama_murid = $post['nama_murid'];
        $this->username = $post['username'];
        if ($post['pass_murid'] != "") {
            $this->pass_murid = md5($post['pass_murid']);
        }

        $this->m_datamurid->update($id, $this);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('datamurid'));
        exit;
    }

    public function detail($id)
    {
        $data['data'] = $this->m_datamurid->detail($id);
        $this->template->layout('datamurid/detail', $data);
    }

    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];

        $this->m_datamurid->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('datamurid'));
        exit;
    }
}
