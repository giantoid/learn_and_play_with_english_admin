<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index()
    {
        $data['objects'] = $this->m_user->show();
        $this->template->layout('users/data.php', $data);
    }

    public function detail($id)
    {
        $data['objects'] = $this->m_user->detail($id);
        $this->template->layout('users/edit.php', $data);
    }

    public function tambah()
    {
        $this->template->layout('users/add.php');
    }

    public function insert()
    {
        $post = $this->input->post();

        $this->nm_user = $post['nama_user'];
        $this->username = $post['username'];
        $this->level = $post['level'];
        $this->password = md5($post['password']);

        $this->m_user->insert($this);

        $this->session->set_flashdata('success', 'Berhasil menambah data user');
        header('Location: ' . base_url('users'));
        exit;
    }

    public function edit($id)
    {
        $data['objects'] = $this->m_user->detail($id);
        $this->template->layout('users/edit.php', $data);
    }

    public function update($id)
    {
        $post = $this->input->post();

        $this->nm_user = $post['nama_user'];
        $this->username = $post['username'];
        $this->level = $post['level'];
        if ($post['password'] != '') {
            $this->password = md5($post['password']);
        }
        $this->m_user->update($this, $id);

        $this->session->set_flashdata('success', 'Berhasil mengubah data user');
        header('Location: ' . base_url('users'));
        exit;
    }

    public function delete()
    {
        $id = $this->input->post('id');

        $this->m_user->delete($id);

        $this->session->set_flashdata('success', 'Berhasil menghapus data user');
        header('Location: ' . base_url('users'));
        exit;
    }
}
