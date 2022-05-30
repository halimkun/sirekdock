<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengajuanModel;
use TCPDF;

class Page extends BaseController
{
    protected $pengajuan;

    public function __construct()
    {
        $this->pengajuan = new PengajuanModel();
    }

    public function index()
    {
        return view('index');
    }

    public function pengajuan()
    {
        return view('pengajuan');
    }

    public function token($token = null)
    {
        if ($token == null) {
            return redirect()->to('/');
        } else {
            return view('token', [
                'token' => $token
            ]);
        }
    }

    public function c()
    {
        $token = $this->request->getPost('token');
        return redirect()->to("/page/check/$token");
    }

    public function cetak($token = null)
    {
        if ($token == null) {
            return redirect()->to('/');
        } else {
            // return view('check', [
            //     'token' => $token,
            //     'data' => $this->pengajuan->where('token', $token)->first()
            // ]);

            $html =  view('cetak', [
                'token' => $token,
                'data' => $this->pengajuan->where('token', $token)->first()
            ]);

            $pdf = new TCPDF('P', PDF_UNIT, 'F4', true, 'UTF-8', false);
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);

            $pdf->addPage();
            $pdf->writeHTML($html, true, false, true, false, '');
            //line ini penting
            $this->response->setContentType('application/pdf');
            $pdf->Output();
        }
    }

    public function check($token = null)
    {
        if ($token == null) {
            return redirect()->to('/');
        } else {
            return view('check', [
                'token' => $token,
                'data' => $this->pengajuan->where('token', $token)->first()
            ]);

            // $html =  view('check', [
            //     'token' => $token,
            //     'data' => $this->pengajuan->where('token', $token)->first()
            // ]);

            // $pdf = new TCPDF('P', PDF_UNIT, 'F4', true, 'UTF-8', false);
            // $pdf->setPrintHeader(false);
            // $pdf->setPrintFooter(false);

            // $pdf->addPage();
            // $pdf->writeHTML($html, true, false, true, false, '');
            // //line ini penting
            // $this->response->setContentType('application/pdf');
            // $pdf->Output();
        }
    }
}
