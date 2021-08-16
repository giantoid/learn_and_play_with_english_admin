<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load model m_ujian
        $this->load->model('m_api');
    }

    public function register()
    {
        $post = $this->input->post();
        $data = [
            'username' => $post['username'],
            'password' => md5($post['password']),
            'level' => 2
        ];

        $response['user'] = $this->m_api->register($data)[0];
        $response['message'] = 'Pendaftaran berhasil.';
        $response['error'] = false;

        echo json_encode($response);
    }

    public function login()
    {
        $post = $this->input->post();
        $data = [
            'username' => $post['username'],
            'password' => md5($post['password'])
        ];

        $data = $this->m_api->login($data);
        if ($data == 1) {
            $response['message'] = 'Username tidak terdaftar.';
            $response['error'] = true;
        } else if ($data == 2) {
            $response['message'] = 'Password salah.';
            $response['error'] = true;
        } else {
            $response['user'] = $data[0];
            $response['message'] = 'Login berhasil.';
            $response['error'] = false;
        }

        echo json_encode($response);
    }

    public function percakapan()
    {
        $data = $this->m_api->percakapan();
        echo json_encode(["percakapan" => $data]);
    }

    public function kategori()
    {
        $data = $this->m_api->kategori();
        echo json_encode(["kategori" => $data]);
    }

    public function kamus($id)
    {
        $data = $this->m_api->kamus($id);
        echo json_encode(["kamus" => $data]);
    }

    public function kamusDetail($id)
    {
        $data = $this->m_api->kamusDetail($id);
        echo json_encode(["kamusDetail" => $data]);
    }

    public function alfabet()
    {
        $data = $this->m_api->alfabet();
        echo json_encode(["alfabet" => $data]);
    }

    public function number()
    {
        $data = $this->m_api->number();
        echo json_encode(["number" => $data]);
    }

    public function grammar()
    {
        $data = $this->m_api->grammar();
        echo json_encode(["grammar" => $data]);
    }

    public function ujian()
    {
        $data = $this->m_api->ujian();
        echo json_encode(["ujian" => $data]);
    }

    public function tebakgambar()
    {
        $data = $this->m_api->tebakgambar();
        echo json_encode(["tebakgambar" => $data]);
    }

    public function jawab()
    {
        $post = $this->input->post();
        $data = [
            'id_soal' => $post['id_soal'],
            'id_user' => $post['id_user'],
            'jawaban' => $post['jawaban'],
            'status' => $post['status'],
        ];

        $this->m_api->jawab($data);

        echo json_encode(["ok" => "ok"]);
    }

    public function cekujian($id)
    {
        $data = $this->m_api->cekujian($id);
        echo json_encode(["ujian" => $data]);
    }
}
