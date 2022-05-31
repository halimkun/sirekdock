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
