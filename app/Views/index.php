<?= $this->extend('pages_template'); ?>
<?= $this->section('content'); ?>
<div class="vh-100 bg-dark" style="background-image: url('https://pbs.twimg.com/media/FBO1XooVIAA93wI.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover">
    <div class="vh-100" style="background-color: rgba(24,24,24,.8);">
        <div class="container">
            <div class="row vh-100">
                <div class="col-md-6 col-lg-6 col-xl-6 d-flex flex-column justify-content-center align-items-start">
                    <div class="px-3 py-1 text-white">
                        <span class="display-3">SIREK<strong>DOCK</strong></span>
                    </div>
                    <div class="px-3 py-1 text-white">
                        <span class="h3">SISTEM REGRISTRASI DOKUMEN</span>
                    </div>
                    <div class="mt-4 mx-3">
                        <a href="<?= base_url('page/pengajuan') ?>" class="btn btn-outline-light btn-lg">PENGAJUAN DOKUMEN</a>
                        <button type="button" class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#cekPengajuan">
                            CEK STATUS
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="cekPengajuan" tabindex="-1" aria-labelledby="cekPengajuanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cekPengajuanLabel">Cek Status Pengajuan Anda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning">
                    <strong>Perhatian!</strong><br>
                    Masukan token yang didapatkan saat pengajuan dikirim.
                </div>
                <form action="/page/c" method="post">
                    <div class="form-group mb-3">
                        <label for="token" class="form-label">Token</label>
                        <input type="number" name="token" id="token" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-dark">CHECK</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>