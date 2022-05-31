<?= $this->extend('admin/admin_template'); ?>
<?= $this->section('content'); ?>
<div class="container my-4">
    <div class="card card-body">
        <div class="d-flex align-items-center justify-content-between">
            <h4>Panduan Pengguna</h4>
        </div>

        <hr>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Tahap - 1
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <img src="/assets/dokumentasi/1.png" alt="" class="img-fluid mb-3">
                        semua orang yang bersangkutan dengan instansi bisa mengajukan registrasi surat melalui link berikut.
                        <br>
                        <a href="/page/pengajuan" class="btn btn-outline-dark">Pengajuan</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Tahap - 2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col">
                                <img src="/assets/dokumentasi/2.png" alt="" class="img-fluid mb-3">
                            </div>
                            <div class="col">
                                <img src="/assets/dokumentasi/3.png" alt="" class="img-fluid mb-3">
                            </div>
                        </div>
                        setelah melakukan registrasi surat, maka surat akan dikirimkan ke instansi terkait. dan akan mendapatkan token surat, dimana token tersebut <strong>harus disimpan</strong> untuk mengakses surat.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Tahap - 3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <img src="/assets/dokumentasi/3.png" alt="" class="img-fluid mb-3">
                        orang yang mengajukan registrasi surat akan mendapatkan file PDF yang bisa didownload dan di print. yang selanjutnya bisa dimintakan tanda tangan kepada pimpinan. dan ditunjukan kepada lembaga yang bersangkutan.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Tahap - 4
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <img src="/assets/dokumentasi/5.png" alt="" class="img-fluid mb-3">
                        orang yang bersangkutan di instansi terkait akan melihat surat yang telah ditandatangi oleh pimpinan. dan surat terkait akan mendapatkan nomor surat.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>