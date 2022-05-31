<?= $this->extend('admin/admin_template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-4">
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('success'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php elseif (session()->getFlashdata('failed')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('failed'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="card card-body">
        <div class="d-flex align-items-center justify-content-between">
            <h4>Daftar Pengajuan</h4>
        </div>

        <hr>

        <table class="table table-hover" id="tabelPengajuan">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Token</th>
                    <th>Status</th>
                    <th>Nama</th>
                    <th>Nama Dokumen</th>
                    <th>Tanggal</th>
                    <th class="text-center">Dokumen</th>
                    <th class="text-center">#</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($datas as $data) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><kbd><?= $data->token ?></kbd></td>
                        <td><?= $data->status ?></td>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->nama_dokumen ?></td>
                        <td><?= $data->tanggal ?></td>
                        <td class="text-center"><a href="/page/cetak/<?= $data->token ?>" target="_blank" class="btn btn-sm btn-outline-dark">Detail</a></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-info btnEditKu" id="btnEditKu" data-token="<?= $data->token ?>" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $data->token ?>">Edit</button>
                            <a href="/pengajuan/del/<?= $data->id ?>" onclick="return confirm('Yakin akan menghapus data ini.')" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>

<?php foreach ($datas as $data) : ?>
    <div class="modal fade" id="modalEdit<?= $data->token ?>" tabindex="-1" aria-labelledby="modalEdit<?= $data->token ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEdit<?= $data->token ?>Label">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- alert warning -->
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">Peringatan!</h4>
                        anda hanya bisa mengubah beberapa dari data yang ada. <strong>(status, nomor dokumen, berlaku tanggal, validasi selesai)</strong>
                    </div>
                    <form action="/pengajuan/update" id="formUpdate" enctype="multipart/form-data" method="POST">
                        <input type="hidden" name="randomEdit" value="<?= $data->id ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-3 rounded mb-3" style="background-color: lightgreen;">
                                    <div class="form-group mb-3">
                                        <label for="token" class="form-label">Token</label>
                                        <input type="number" name="token" class="form-control" readonly value="<?= $data->token ?>" id="token" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" class="form-select" id="status">
                                            <option <?= $data->status == 'proses' ? 'selected' : '' ?> value="proses">PROSES</option>
                                            <option <?= $data->status == 'selesai' ? 'selected' : '' ?> value="selesai">SELESAI</option>
                                            <option <?= $data->status == 'dibatalkan' ? 'selected' : '' ?> value="dibatalkan">DIBATALKAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="nomor_dokumen" class="form-label">Nomer Dokumen</label>
                                        <input type="text" name="nomor_dokumen" value="<?= $data->nomor_dokumen ?>" class="form-control" placeholder="...." id="nomor_dokumen"></input>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="berlaku" class="form-label">Berlaku Tangal</label>
                                        <input type="date" name="berlaku_sampai" value="<?= $data->berlaku_sampai ?>" class="form-control" id="berlaku"></input>
                                    </div>
                                </div>

                                <div class="p-3 rounded mb-3" style="background-color: lightgreen;">
                                    <div class="form-group mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" readonly value="<?= $data->nama ?>" id="nama" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <input type="text" name="jabatan" class="form-control" readonly value="<?= $data->jabatan ?>" id="jabatan" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="lembaga" class="form-label">Lembaga</label>
                                        <input type="text" name="lembaga" class="form-control" readonly value="<?= $data->lembaga ?>" id="lembaga"></input>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="fakultas" class="form-label">fakultas</label>
                                        <input type="text" name="fakultas" class="form-control" readonly value="<?= $data->fakultas ?>" id="fakultas"></input>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="p-3 rounded mb-3 fieldValidasiDokumenSelesai" style="background-color: lightpink;">
                                    <div class="form-group mb-3">
                                        <label for="lampirkan_validasi" class="form-label">Lampirkan Dokumen yang sudah tervalidasi</label>
                                        <select name="lampirkan_validasi" <?= $data->lampirkan_validasi_selesai == 'yes' ? 'disabled' : '' ?> id="lampirkan_validasi" class="form-select">
                                            <option <?= $data->lampirkan_validasi_selesai == 'no' ? 'selected' : '' ?> value="no">Tidak Di Lampirkan</option>
                                            <option <?= $data->lampirkan_validasi_selesai == 'yes' ? 'selected' : '' ?> value="yes">Lampirkan</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3 group_validasi_selesai" id="group_validasi_selesai">
                                        <label for="validasi_selesai" class="form-label">Dokumen Tervalidasi</label>
                                        <?php if ($data->lampirkan_validasi_selesai == 'yes') : ?>
                                            <input type="text" readonly value="<?= $data->validasi_selesai ?>" id="validasi_selesai" class="form-control">
                                        <?php else : ?>
                                            <input type="file" name="validasi_selesai" id="validasi_selesai" class="form-control">
                                        <?php endif ?>
                                    </div>
                                </div>

                                <div class="p-3 mb-3 rounded" style="background-color: lightgreen;">
                                    <div class="form-group mb-3">
                                        <label for="nama_dokumen" class="form-label">Nama Dokumen</label>
                                        <input type="text" name="nama_dokumen" value="nama_dokumen" readonly id="nama_dokumen" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="revisi" class="form-label">Revisi</label>
                                        <input type="text" name="revisi" value="revisi" readonly id="revisi" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tanggal" class="form-label">Tanggal</label>
                                        <input type="text" name="tanggal" value="tanggal" readonly id="tanggal" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="halaman" class="form-label">Halaman</label>
                                        <input type="text" name="halaman" value="halaman" readonly id="halaman" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="paragraf" class="form-label">Paragraf</label>
                                        <input type="text" name="paragraf" value="paragraf" readonly id="paragraf" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="rasional" class="form-label">Rasional</label>
                                        <input type="text" name="rasional" value="rasional" readonly id="rasional" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

<script>
    $(document).ready(function() {
        $('#tabelPengajuan').DataTable();

        $(".fieldValidasiDokumenSelesai").hide();
        $("#group_validasi_selesai").hide();

        $(".btnEditKu").each(function() {
            $(this).on('click', function() {
                token = $(this).data('token');

                // ---------------------------
                var status = $(`#modalEdit${token} #status`).find(":selected").val();

                if (status == 'selesai') {
                    $(".fieldValidasiDokumenSelesai").show();
                } else {
                    $(".fieldValidasiDokumenSelesai").hide();
                }

                $(`#modalEdit${token} #status`).on('change', function() {
                    status_on_change = $(this).find(":selected").val();
                    if (status_on_change == 'selesai') {
                        $(".fieldValidasiDokumenSelesai").show();
                    } else {
                        $(".fieldValidasiDokumenSelesai").hide();
                    }
                });
                // ---------------------------

                var lv = $(`#modalEdit${token} #lampirkan_validasi`).find(":selected").val();

                if (lv == 'no') {
                    $(".group_validasi_selesai").hide();
                } else {
                    $(".group_validasi_selesai").show();
                }

                $(`#modalEdit${token} #lampirkan_validasi`).on('change', function() {
                    status_on_change_validasi = $(this).find(":selected").val();
                    if (status_on_change_validasi == 'yes') {
                        $(".group_validasi_selesai").show();
                        $("#validasi_selesai").attr('required', true);
                    } else {
                        $(".group_validasi_selesai").hide();
                        $("#validasi_selesai").attr('required', false);
                    }
                });
            });
        })
    });
</script>
<?= $this->endSection(); ?>