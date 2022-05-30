<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengajuanModel;

class Pengajuan extends BaseController
{
    protected $pengajuan;

    public function __construct()
    {
        $this->pengajuan = new PengajuanModel();
    }

    public function index()
    {
        return redirect()->to('/page/pengajuan');
    }

    public function submit()
    {
        // $file = $this->request->getFile('validasi');
        // $file_name = $file->getRandomName();
        $token = rand(1000000000, 9999999999);

        if ($this->request->getPost('revisi') == "lainnya") {
            $revisi_manual = $this->request->getPost('revisi_manual');
        } else {
            $revisi_manual = NULL;
        }

        $data = [
            'token'  => $token,
            'status' => 'proses',
            // ----------
            'nama'     => $this->request->getPost('nama'),
            'jabatan'  => $this->request->getPost('jabatan'),
            'lembaga'  => $this->request->getPost('lembaga'),
            'fakultas' => $this->request->getPost('fakultas'),
            // ----------
            'nomor_dokumen' => null,
            'nama_dokumen'  => $this->request->getPost('nama_dokumen'),
            'revisi'        => $this->request->getPost('revisi'),
            'revisi_manual' => $revisi_manual,
            'tanggal'       => $this->request->getPost('tanggal'),
            'halaman'       => $this->request->getPost('halaman'),
            'paragraf'      => $this->request->getPost('paragraf'),
            'rasional'      => $this->request->getPost('rasional'),
        ];

        $url = "/page/token/" . $data['token'] . "?pesan=";

        if ($this->pengajuan->save($data)) {
            return redirect()->to($url . "success");
        } else {
            return redirect()->to($url . "failed");
        }
    }
}
