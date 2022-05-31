<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengajuanModel;
use App\Models\PetugasModel;

class Pengajuan extends BaseController
{
    protected $pengajuan;
    protected $petugas;

    public function __construct()
    {
        $this->pengajuan = new PengajuanModel();
        $this->petugas = new PetugasModel();
    }

    public function index()
    {
        return redirect()->to('/page/pengajuan');
    }

    public function submit()
    {

        // $file = $this->request->getFile('validasi');
        // $file_name = $file->getRandomName();

        if ($this->request->getPost('revisi') == "lainnya") {
            $revisi_manual = $this->request->getPost('revisi_manual');
        } else {
            $revisi_manual = NULL;
        }

        $data = [
            'token'  => rand(10000000000, 99999999999),
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
            // -----------
            'lampirkan_validasi_selesai' => 'no',
            'validasi_selesai'           => null,
        ];

        $url = "/page/token/" . $data['token'] . "?pesan=";

        if ($this->pengajuan->save($data)) {
            return redirect()->to($url . "success");
        } else {
            return redirect()->to($url . "failed");
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

        // cek nomor dokumen
        if ($this->request->getPost('nomor_dokumen') == "" || $this->request->getPost('nomor_dokumen') == null) {
            $nomor_dokumen = null;
        } else {
            $nomor_dokumen = $this->request->getPost('nomor_dokumen');
        }

        if ($this->request->getPost('lampirkan_validasi') == "yes") {
            $file = $this->request->getFile('validasi_selesai');
            $file_name = $file->getRandomName();
        } else {
            $file_name = null;
        }

        $data = [
            'id'                         => $this->request->getPost('randomEdit'),
            'status'                     => $this->request->getPost('status'),
            'nomor_dokumen'              => $nomor_dokumen,
            'berlaku_sampai'             => $this->request->getPost('berlaku_sampai'),
            'lampirkan_validasi_selesai' => $this->request->getPost('lampirkan_validasi'),
            'validasi_selesai'           => $file_name,
        ];

        if ($this->pengajuan->save($data)) {
            if ($this->request->getPost('lampirkan_validasi') == "yes") {
                $file->move(ROOTPATH . 'public/uploads/validasi_selesai/');
            }
            session()->setFlashdata('success', 'Data berhasil diubah');
            return redirect()->to("/admin/pengajuan");
        } else {
            session()->setFlashdata('failed', 'Data gagal diubah');
            return redirect()->to("/admin/pengajuan");
        }
    }

    public function del($id = null)
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
            return redirect()->to('/admin/pengajuan');
        } else {
            if ($this->pengajuan->delete($id)) {
                session()->setFlashdata('success', 'Data berhasil dihapus');
                return redirect()->to('/admin/pengajuan');
            } else {
                session()->setFlashdata('failed', 'Data gagal dihapus');
                return redirect()->to('/admin/pengajuan');
            }
        }
    }
}
