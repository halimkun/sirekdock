<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>

    <style>
        .error {
            color: #dc3545 !important
        }
    </style>
</head>

<body style="background-image: url('https://pbs.twimg.com/media/FBO1XooVIAA93wI.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; background-attachment: fixed;">
    <div style="background-color: rgba(24,24,24,.8); position: absolute; top: 0; bottom: 0; left: 0; right: 0; overflow-y: scroll;overflow-x: hidden;">
        <div class="container">
            <div class="row vh-100">
                <div class="col-md-5 col-lg-5 col-xl-5"></div>
                <div class="col-md-7 col-lg-7 col-xl-7">
                    <div style="margin-top: 3em; margin-bottom: 5em;">
                        <div class="card card-body">
                            <form action="/pengajuan/submit" enctype="multipart/form-data" method="POST" id="formPengajuan">
                                <div class="p-3 rounded mb-4" style="background-color: aquamarine;">
                                    <div class="form-group mb-3">
                                        <label for="nama" class="form-label ">Nama Pengusul</label>
                                        <input type="nama" name="nama" id="nama" class="p-2 form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="jabatan" class="form-label ">Jabatan / Fungsi</label>
                                        <input type="jabatan" name="jabatan" id="jabatan" class="p-2 form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="lembaga" class="form-label ">Lembaga / Biro / Unit</label>
                                        <input type="lembaga" name="lembaga" id="lembaga" class="p-2 form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="fakultas" class="form-label ">Fakultas / Prodi</label>
                                        <input type="fakultas" name="fakultas" id="fakultas" class="p-2 form-control">
                                    </div>
                                </div>

                                <div class="p-3 rounded" style="background-color: coral;">
                                    <div class="form-group mb-3">
                                        <label for="nama_dokumen" class="form-label ">Nama Dokumen</label>
                                        <input type="text" name="nama_dokumen" id="nama_dokumen" placeholder="Dokumen . . ." class="p-2 form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="revisi" class="form-label ">Revisi</label>
                                        <select name="revisi" id="revisi" class="form-select p-2">
                                            <option value="baru">Baru</option>
                                            <option value="1">1</option>
                                            <option value="lainnya">Lainnya (input manual)</option>
                                        </select>
                                        <div class="p-3 px-4 mt-3 inputRevManual d-none rounded" style="background-color: rgba(245, 61, 125, 0.7)">
                                            <div class="form-group">
                                                <label for="revisi" class="form-label ">Masukan Revisi ke.</label>
                                                <input type="number" name="revisi_manual" id="revisi_manual" class="p-2 form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tanggal" class="form-label ">Tanggal & Tahun Pengusula</label>
                                        <input type="date" name="tanggal" id="tanggal" class="p-2 form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="halaman" class="form-label ">halaman</label>
                                        <input type="number" name="halaman" id="halaman" placeholder="min 1" min="1" class="p-2 form-control">
                                        <small class="text-muted">Jumlah halaman dokumen</small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="paragraf" class="form-label ">Paragraf</label>
                                        <input type="text" name="paragraf" id="paragraf" placeholder="..." class="p-2 form-control">
                                        <small class="text-muted">Pragraf yang direvisi atau diusulkan</small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="rasional" class="form-label ">Rasional</label>
                                        <textarea type="text" name="rasional" id="rasional" placeholder="..." class="p-2 form-control"></textarea>
                                        <small class="text-muted">Ket : Penambahan / Perubahan Dokumen</small>
                                    </div>
                                    <!-- <div class="form-group mb-3">
                                        <label for="validasi" class="form-label ">Validasi Usulan</label>
                                        <input type="file" name="validasi" id="validasi" class="p-2 form-control">
                                        <small class="text-muted">validasi usulan penambahan dan perubahan dokumen dengan mendownload dan mengisi <strong><a href="https://drive.google.com/file/d/1QaY501m6uUTGqvM7r-s-w8bgDgSdmGRe/view?usp=sharing">dokumen ini</a></strong> dan kemudian diupload disini</small>
                                    </div> -->
                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-outline-light px-5">AJUKAN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $("#revisi").on("change", function() {
                if ($(this).val() == "lainnya") {
                    $(".inputRevManual").removeClass("d-none");
                } else {
                    $(".inputRevManual").addClass("d-none");
                }
            });

            jQuery.validator.setDefaults({
                errorClass: "is-invalid error",
                validClass: "is-valid",
            });

            $.validator.addMethod("myreg", function(value, element) {
                return this.optional(element) || /^[a-z0-9\-\s]+$/i.test(value);
            }, "Username must contain only letters, numbers, or dashes.");

            $("#formPengajuan").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    nama_dokumen: {
                        required: true
                    },
                    revisi: {
                        required: true
                    },
                    tanggal: {
                        required: true
                    },
                    halaman: {
                        required: true,
                        number: true
                    },
                    paragraf: {
                        required: true
                    },
                    rasional: {
                        required: true
                    },
                    validasi: {
                        required: true,
                        extension: "doc|docx|pdf|xls|xlsx|ppt|pptx|rtf|txt"
                    }
                },
                messages: {
                    validasi: {
                        required: "Validasi harus diisi",
                        extension: "File tidak valid (doc|docx|pdf|xls|xlsx|ppt|pptx|rtf|txt)"
                    }
                },
            });
        })
    </script>

</body>

</html>