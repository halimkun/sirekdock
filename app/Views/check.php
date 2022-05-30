<?= $this->extend('pages_template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="card card-body">
        <?php if ($data == null) : ?>
            <div class="alert alert-danger">
                <h1>Data sesuai dengan token tidak dapat ditemukan</h1>
            </div>
        <?php else : ?>
            <div class="text-center">
                <div class="text-muted"><span>Token Pengajuan</span></div>
                <h2><kbd><?= $token ?></kbd></h2>
            </div>
            <div class="px-5" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <h5>Detail Pengajuan</h5>
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th width=30%>Status</th>
                                        <td><?= $data->status ?></td>
                                    </tr>
                                    <tr>
                                        <th width=30%>Token</th>
                                        <td><?= $data->token ?></td>
                                    </tr>
                                    <tr>
                                        <th width=30%>Nomor Dokumen</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th width=30%>Berlaku Tanggal</th>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mb-4">
                            <h5>Detail Pengirim</h5>
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th width=30%>Nama</th>
                                        <td><?= $data->status ?></td>
                                    </tr>
                                    <tr>
                                        <th width=30%>Jabatan</th>
                                        <td><?= $data->token ?></td>
                                    </tr>
                                    <tr>
                                        <th width=30%>Lembaga</th>
                                        <td><?= $data->token ?></td>
                                    </tr>
                                    <tr>
                                        <th width=30%>Fakultas</th>
                                        <td><?= $data->token ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <h5>Detail Pengajuan</h5>
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th width=30%>Nama Dokuman</th>
                                        <td><?= $data->nama_dokumen ?></td>
                                    </tr>
                                    <tr>
                                        <th width=30%>Revisi Ke</th>
                                        <td>
                                            <?php if ($data->revisi == "lainnya") : ?>
                                                <?= $data->revisi_manual ?>
                                            <?php else : ?>
                                                <?= $data->revisi ?>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width=30%>Tanggal</th>
                                        <td><?= $data->tanggal ?></td>
                                    </tr>
                                    <tr>
                                        <th width=30%>Halaman</th>
                                        <td><?= $data->halaman ?></td>
                                    </tr>
                                    <tr>
                                        <th width=30%>Paragraf</th>
                                        <td><?= $data->paragraf ?></td>
                                    </tr>
                                    <tr>
                                        <th width=30%>Rasional</th>
                                        <td><?= $data->rasional ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <?php if ($data->status == "selesai") : ?>
                            <div class="mb-4 p-4 rounded" style="background-color: lightgreen;">
                                <h5>Validasi Selesai</h5>
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th width=30%>Validasi Selesai</th>
                                            <td><?= $data->validasi ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        <?php endif ?>
    </div>
</div>
<?= $this->endSection(); ?>