<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAll();

        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['title'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function add(){
        if ($this->model('Mahasiswa_model')->add($_POST) > 0) {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}