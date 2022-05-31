<?= $this->extend('admin/admin_template'); ?>
<?= $this->section('content'); ?>
<div class="container my-4">
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
        <div class="card card-body">
            <div class="d-flex align-items-center justify-content-between">
                <h4>Daftar Pengajuan</h4>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addPetugas">
                    [ + ] Tambah Petugas
                </button>
            </div>

            <hr>

            <table class="table table-hover" id="tabelPetugas">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>Token</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($datas as $p) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><kbd><?= $p->token; ?></kbd></td>
                            <td><?= $p->username; ?></td>
                            <td><?= $p->nama; ?></td>
                            <td><?= $p->email; ?></td>
                            <td>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $p->token ?>" class="btn btn-sm btn-warning">
                                    edit</i>
                                </button>
                                <a href="<?= base_url('/petugas/delete/' . $p->id); ?>" onclick="return confirm('apakah yakin anda akan menghapus data petugas : <?= $p->username ?> ?')" class="btn btn-sm btn-danger">
                                    hapus</i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php foreach ($datas as $p) : ?>
    <div class="modal fade" id="modalEdit<?= $p->token ?>" tabindex="-1" aria-labelledby="modalEdit<?= $p->token ?>Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEdit<?= $p->token ?>Label">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/petugas/update" method="post">
                        <input type="hidden" name="randomEdit" value="<?= $p->id ?>">
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" value="<?= $p->nama ?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" readonly id="username" value="<?= $p->username ?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" value="<?= $p->email ?>" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-dark">TAMBAH</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

<!-- Modal -->
<div class="modal fade" id="addPetugas" tabindex="-1" aria-labelledby="addPetugasLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPetugasLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/petugas/add" method="post">
                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-dark">TAMBAH</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tabelPetugas').DataTable();
    });
</script>
<?= $this->endSection(); ?>