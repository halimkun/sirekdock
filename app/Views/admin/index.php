<?= $this->extend('admin/admin_template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-4">
    <div class="card card-body">
        <div class="d-flex align-items-center justify-content-between">
            <h4>Dashboard</h4>
            <div>Akun Petugas : <kbd><?= count($petugas) ?></kbd></div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-3">
                <div class="card card-body text-center">
                    <div class="display-2"><?= count($pengajuan) ?></div>
                    <kbd>Jumlah pengajuan</kbd>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body text-center">
                    <div class="display-2"><?= count($pengajuan_proses) ?></div>
                    <kbd>Pengajuan Dalam Proses</kbd>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body text-center">
                    <div class="display-2"><?= count($pengajuan_selesai) ?></div>
                    <kbd>Pengajuan Selesai</kbd>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body text-center">
                    <div class="display-2"><?= count($pengajuan_dibatalkan) ?></div>
                    <kbd>Pengajuan dibatalkan</kbd>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>