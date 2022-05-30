<?= $this->extend('pages_template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="card card-body">
        <div class="text-center">
            <h2><kbd><?= $token ?></kbd></h2>
        </div>
        <div class="px-5 mt-5 text-center">
            <div class="alert alert-warning">
                <strong>Berhasil !</strong> Pengajuan berhasil dikirim.
                <br><br>
                <strong class="mt-4">
                    Harap simpan token ini, karena akan digunakan untuk validasi pengajuan, dan pengecekan status pengajuan
                </strong>
            </div>
            <div class="mt-3">
            </div>
            <div class="mt-4">
                <a href="/page/check/<?= $token ?>" class="btn btn-outline-dark px-3">Cek Status Pengajuan</a>
                <a href="/page/cetak/<?= $token ?>" class="btn btn-dark px-3">Print Dokumen</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>