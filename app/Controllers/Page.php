<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function pengajuan()
    {
        return view('pengajuan');
    }
}
