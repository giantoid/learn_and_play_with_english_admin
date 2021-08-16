<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datamateri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_datamateri');
    }

    public function index()
    {
        $data['objects'] = $this->m_datamateri->show();
        $this->template->layout('datamateri/data', $data);
    }

    public function tambah()
    {
        $this->template->layout('datamateri/add');
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->id_materi = $post['id_materi'];
        $this->nama_materi = $post['nama_materi'];
        $this->materi = $this->_uploadImage();

        $this->m_datamateri->insert($this);
        $this->session->set_flashdata('success', 'Berhasil menambah data');
        header('Location: ' . base_url('datamateri'));
        exit;
    }

    public function edit($id)
    {
        $data['data'] = $this->m_datamateri->detail($id);
        $this->template->layout('datamateri/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $this->nama_materi = $post['nama_materi'];
        if ($_FILES['materi']['name']) {
            unlink('./assets/gambar/materi/' . $post['glama']);
            $this->materi = $this->_uploadImage();
        }

        $this->m_datamateri->update($id, $this);
        $this->session->set_flashdata('success', 'Berhasil merubah data');
        header('Location: ' . base_url('datamateri'));
        exit;
    }

    public function detail($id)
    {
        $data['data'] = $this->m_datamateri->detail($id);
        $this->template->layout('datamateri/detail', $data);
    }

    public function delete()
    {
        $post = $this->input->post();
        $id = $post['id'];
        unlink('./assets/gambar/materi/' . $post['hgambar']);

        $this->m_datamateri->delete($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        header('Location: ' . base_url('datamateri'));
        exit;
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/gambar/materi';
        $config['allowed_types']        = 'gif|jpg|png|wav|mp3|aac';
        $config['file_name']            = $this->nama_materi;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('materi')) {
            return $this->upload->data("file_name");
        }

        print_r($this->upload->display_errors());
    }
}
