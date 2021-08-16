<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_kamus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data_kamus');
    }

    public function index()
    {
        $data['objects'] = $this->m_data_kamus->show();
        $this->template->layout('data-kamus/data', $data);
    }

    public function tambah()
    {
        $this->template->layout('data-kamus/add');
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->bhs_indonesia = $post['bhs_indonesia'];
        $this->bhs_inggris = $post['bhs_inggris'];
        $this->gambar = $this->_uploadImage();
        $this->suara = $this->_uploadAudio();

        $this->m_data_kamus->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('data_kamus'));
        exit;
    }

    public function edit($id)
    {
        $data['data'] = $this->m_data_kamus->detail($id);
        $this->template->layout('data-kamus/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $this->bhs_indonesia = $post['bhs_indonesia'];
        $this->bhs_inggris = $post['bhs_inggris'];
        if ($_FILES['gambar']['name']) {
            unlink('./assets/gambar/' . $post['glama']);
            $this->gambar = $this->_uploadImage();
        }
        if ($_FILES['suara']['name']) {
            unlink('./assets/suara/' . $post['slama']);
            $this->suara = $this->_uploadAudio();
        }

        $this->m_data_kamus->update($id, $this);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('data_kamus'));
        exit;
    }

    public function detail($id)
    {
        $data['data'] = $this->m_data_kamus->detail($id);
        $this->template->layout('data-kamus/detail', $data);
    }

    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];
        unlink('./assets/gambar/' . $post['hgambar']);
        unlink('./assets/suara/' . $post['hsuara']);

        $this->m_data_kamus->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('data_kamus'));
        exit;
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/gambar/';
        $config['allowed_types']        = 'gif|jpg|png|wav|mp3|aac';
        $config['file_name']            = $this->bhs_indonesia;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }

        print_r($this->upload->display_errors());
    }

    private function _uploadAudio()
    {
        $config['upload_path']          = './assets/suara/';
        $config['allowed_types']        = 'wav|mp3|aac';
        $config['file_name']            = $this->bhs_indonesia;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('suara')) {
            return $this->upload->data("file_name");
        }

        print_r($this->upload->display_errors());
    }
}
