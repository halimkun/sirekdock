<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengajuanModel;
use App\Models\PetugasModel;

class Admin extends BaseController
{
    protected $pengajuan;
    protected $petugas;


    public function __construct() {
        $this->pengajuan = new PengajuanModel();
        $this->petugas = new PetugasModel();
    }

    public function index()
    {
        return view('admin/index', [
            'pengajuan' => $this->pengajuan->findAll(),
            'pengajuan_selesai' => $this->pengajuan->where(['status' => 'selesai'])->findAll(),
            'pengajuan_proses' => $this->pengajuan->where(['status' => 'proses'])->findAll(),
            'pengajuan_dibatalkan' => $this->pengajuan->where(['status' => 'dibatalkan'])->findAll(),
            'petugas' => $this->petugas->findAll(),
        ]);
    }

    public function pengajuan()
    {
        return view('admin/pengajuan', [
            'datas' => $this->pengajuan->findAll()
        ]);
    }

    public function petugas()
    {
        return view('admin/petugas', [
            'datas' => $this->petugas->findAll()
        ]);
    }

    public function panduan()
    {
        return view('admin/panduan');
    }
}
