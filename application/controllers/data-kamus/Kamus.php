<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data-kamus/m_kamus');
    }

    public function index()
    {
        $data['objects'] = $this->m_kamus->show();
        $this->template->layout('data-kamus/kamus/data', $data);
    }

    public function tambah()
    {
        $this->template->layout('data-kamus/kamus/add');
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->indonesia = $post['indonesia'];
        $this->english = $post['english'];
        $this->id_kategori = $post['id_kategori'];
        $this->gambar = $this->_uploadImage();

        $this->m_kamus->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('data-kamus/kamus'));
        exit;
    }

    public function edit($id)
    {
        $data['data'] = $this->m_kamus->detail($id);
        $this->template->layout('data-kamus/kamus/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $this->indonesia = $post['indonesia'];
        $this->english = $post['english'];
        $this->id_kategori = $post['id_kategori'];
        if ($_FILES['gambar']['name']) {
            unlink('./assets/gambar/' . $post['glama']);
            $this->gambar = $this->_uploadImage();
        }
        // if ($_FILES['suara']['name']) {
        //     unlink('./assets/suara/' . $post['slama']);
        //     $this->suara = $this->_uploadAudio();
        // }

        $this->m_kamus->update($id, $this);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('data-kamus/kamus'));
        exit;
    }

    public function detail($id)
    {
        $data['data'] = $this->m_kamus->detail($id);
        $this->template->layout('data-kamus/kamus/detail', $data);
    }

    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];
        unlink('./assets/gambar/' . $post['hgambar']);
        // unlink('./assets/suara/' . $post['hsuara']);

        $this->m_kamus->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('data-kamus/kamus'));
        exit;
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/gambar/';
        $config['allowed_types']        = 'gif|jpg|png|wav|mp3|aac';
        $config['file_name']            = $this->indonesia;
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
        $config['file_name']            = $this->indonesia;
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
