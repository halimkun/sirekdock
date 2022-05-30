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
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6"></div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>