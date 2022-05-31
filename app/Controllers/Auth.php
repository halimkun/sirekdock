<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PetugasModel;

class Auth extends BaseController
{
    protected $petugas;

    public function __construct() {
        $this->petugas = new PetugasModel();
    }

    public function index()
    {
        return redirect()->to('/');
    }

    public function login()
    {
        $data = $this->petugas->where('token', $this->request->getPost('token'))->first();
        if ($data == null) {
            return redirect()->to('/');
        } else {
            setcookie('token', $data->token, time() + 10800, '/');
            setcookie('username', $data->username, time() + 10800, '/');   
            return redirect()->to('/admin');
        }
    }

    public function out()
    {
        $data = $this->petugas->where('token', $_COOKIE['token'])->first();
        if (!isset($_COOKIE['token'])) {
            return redirect()->to('/');
        } else {
            setcookie('token', $data->token, time() - 10800, '/');
            setcookie('username', $data->username, time() - 10800, '/');
            return redirect()->to('/admin');
        }
    }
}
