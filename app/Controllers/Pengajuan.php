<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pengajuan extends BaseController
{
    public function index()
    {
        return redirect()->to('/page/pengajuan');
    }

    public function submit()
    {
        dd($this->request->getPost());
    }
}
