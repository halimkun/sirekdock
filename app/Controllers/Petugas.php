<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PetugasModel;

class Petugas extends BaseController
{
    protected $petugas;

    public function __construct()
    {
        $this->petugas = new PetugasModel();
    }

    public function index()
    {
        return redirect()->to('/admin/petugas');
    }

    public function add()
    {
        if (!isset($_COOKIE['token'])) {
            echo "TOKEN TIDAK ADA";
            return redirect()->to(base_url());
        } else {
            if ($this->petugas->where('token', $_COOKIE['token'])->find() == null) {
                return redirect()->to(base_url());
            }
        }

        $data = [
            'token' => rand(10000000000, 99999999999),
            'nama'     => $this->request->getPost('nama'),
            'username'     => $this->request->getPost('username'),
            'email'     => $this->request->getPost('email'),
        ];

        if ($this->petugas->save($data)) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/petugas');
        } else {
            session()->setFlashdata('failed', 'Data gagal ditambahkan');
            return redirect()->to('/admin/petugas');
        }
    }

    public function update()
    {
        if (!isset($_COOKIE['token'])) {
            echo "TOKEN TIDAK ADA";
            return redirect()->to(base_url());
        } else {
            if ($this->petugas->where('token', $_COOKIE['token'])->find() == null) {
                return redirect()->to(base_url());
            }
        }

        $data = [
            'id'    => $this->request->getPost('randomEdit'),
            'nama'  => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
        ];

        if ($this->petugas->save($data)) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/petugas');
        } else {
            session()->setFlashdata('failed', 'Data gagal ditambahkan');
            return redirect()->to('/admin/petugas');
        }
    }

    public function delete($id = null)
    {
        if (!isset($_COOKIE['token'])) {
            echo "TOKEN TIDAK ADA";
            return redirect()->to(base_url());
        } else {
            if ($this->petugas->where('token', $_COOKIE['token'])->find() == null) {
                return redirect()->to(base_url());
            }
        }
        
        if ($id == null) {
            return redirect()->to('/admin/petugas');
        } else {
            if ($this->petugas->delete($id)) {
                session()->setFlashdata('success', 'Data berhasil dihapus');
                return redirect()->to('/admin/petugas');
            } else {
                session()->setFlashdata('failed', 'Data gagal dihapus');
                return redirect()->to('/admin/petugas');
            }
        }
    }
}
