<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pengajuan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'token', 'status', 'nomor_dokumen', 'berlaku_sampai', 'nama', 'jabatan',
        'lembaga', 'fakultas', 'nama_dokumen', 'revisi', 'revisi_manual', 'tanggal',
        'paragraf', 'rasional', 'halaman', 'lampirkan_validasi_selesai', 'validasi_selesai',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
