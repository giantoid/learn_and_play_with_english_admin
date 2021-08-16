<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ujian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load model m_ujian
        $this->load->model('m_ujian');
    }

    // index
    public function index()
    {
        $data['objects'] = $this->m_ujian->show();
        $this->template->layout('ujian/data', $data);
    }

    // menampilkan form tambah data
    public function tambah()
    {
        $this->template->layout('ujian/add');
    }

    // insert data
    public function insert()
    {
        $level = $this->m_ujian->getLevel();

        $post = $this->input->post();
        $this->nama_soal = $post['nama_soal'];
        if ($_FILES['gambar']['name']) {
            $this->gambar = $this->_uploadImage();
        }
        $this->a = $post['a'];
        $this->b = $post['b'];
        $this->c = $post['c'];
        $this->d = $post['d'];
        $this->true = $post['true'];
        if ($level) {
            $this->level = $level[0]->level + 1;
        } else {
            $this->level = 1;
        }

        // $jawaban = [];
        // for ($i = 0; $i < count($post['jawaban']); $i++) {
        //     $jawaban[$i] = [
        //         "jawaban" => $post['jawaban'][$i],
        //         "benar" => $post['benar'][$i]
        //     ];
        // }

        $this->m_ujian->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('ujian'));
        exit;
    }

    // menampilkan form edit data
    public function edit($id)
    {
        $data['data'] = $this->m_ujian->detail($id);
        $this->template->layout('ujian/edit', $data);
    }

    // update data
    public function update()
    {
        $post = $this->input->post();
        $id = $post['id_soal'];
        $this->nama_soal = $post['nama_soal'];
        if ($_FILES['gambar']['name']) {
            unlink('./assets/gambar/ujian/' . $post['glama']);
            $this->gambar = $this->_uploadImage();
        }
        $this->a = $post['a'];
        $this->b = $post['b'];
        $this->c = $post['c'];
        $this->d = $post['d'];
        $this->true = $post['true'];

        $this->m_ujian->update($this, $id);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('ujian'));
        exit;
    }

    // menampilkan halaman detail
    public function detail($id)
    {
        $data['data'] = $this->m_ujian->detail($id);
        $this->template->layout('ujian/detail', $data);
    }

    // menghapus data
    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];
        unlink('./assets/gambar/ujian/' . $post['hgambar']);


        $this->m_ujian->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('ujian'));
        exit;
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/gambar/ujian/';
        $config['allowed_types']        = 'gif|jpg|png|wav|mp3|aac';
        $config['file_name']            = $this->nama_soal;
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
}
