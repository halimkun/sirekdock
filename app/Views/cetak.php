<style>
    table {
        width: 100%;
    }
</style>
<table style="border: 1px solid black; border-collapse: collapse; padding:3px;" width="100%">
    <tbody>
        <tr>
            <td style="border: 1px solid black; text-align: center; border-collapse: collapse;" rowspan="4">
                <img src="<?= '/assets/img/umpp.png' ?>" width="100" alt="logo umpp">
            </td>
            <td style="border: 1px solid black; text-align: center; border-collapse: collapse;" colspan="2">
                <strong>FORMULIR USULAN PENAMBAHAN DAN PERUBAHAN DOKUMEN</strong>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black; border-collapse: collapse;"><strong>No. Dokumen</strong></td>
            <td style="border: 1px solid black; border-collapse: collapse;">: </td>
        </tr>
        <tr>
            <td style="border: 1px solid black; border-collapse: collapse;"><strong>Revisi</strong></td>
            <td style="border: 1px solid black; border-collapse: collapse;">: <?= $data->revisi ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid black; border-collapse: collapse;"><strong>Berlaku Tanggal</strong></td>
            <td style="border: 1px solid black; border-collapse: collapse;">: </td>
        </tr>
    </tbody>
</table>
<br>
<div style="text-align: center;">
    <img src="<?= '/assets/img/umpp.png' ?>" width="80" alt="logo umpp">
    <p>
        <strong>FORMULIR USULAN PENAMBAHAN DAN PERUBAHAN DOKUMEN</strong><br>
        <i>(Mohon diisi secara lengkap)</i>
    </p>
    <p></p>
    <p></p>
    <div style="text-align: left;">
        <table style="border: none; border-collapse: collapse; padding:3px;">
            <tr>
                <td style="border: none; border-collapse: collapse;">Nama Pengusul</td>
                <td style="border: none; border-collapse: collapse;">: <?= $data->nama ?></td>
            </tr>
            <tr>
                <td style="border: none; border-collapse: collapse;">Jabatan/Fungsi</td>
                <td style="border: none; border-collapse: collapse;">: <?= $data->jabatan ?></td>
            </tr>
            <tr>
                <td style="border: none; border-collapse: collapse;">Lembaga/Biro/Unit/</td>
                <td style="border: none; border-collapse: collapse;">: <?= $data->lembaga ?></td>
            </tr>
            <tr>
                <td style="border: none; border-collapse: collapse;">Fakultas/Prodi*</td>
                <td style="border: none; border-collapse: collapse;">: <?= $data->fakultas ?></td>
            </tr>
        </table>
        <br><br>
        <strong>Dokumen yang diusulkan</strong><br>
        <table style="border: none; border-collapse: collapse; padding:3px;">
            <tr>
                <td style="border: none; border-collapse: collapse;">Nama Dokumen</td>
                <td style="border: none; border-collapse: collapse;">: <?= $data->nama_dokumen ?></td>
            </tr>
            <tr>
                <td style="border: none; border-collapse: collapse;">Revisi</td>
                <td style="border: none; border-collapse: collapse;">: <?= $data->revisi ?></td>
            </tr>
            <tr>
                <td style="border: none; border-collapse: collapse;">Tanggal dan Tahun Pengusulan</td>
                <td style="border: none; border-collapse: collapse;">: <?= $data->tanggal ?></td>
            </tr>
            <tr>
                <td style="border: none; border-collapse: collapse;">Halaman</td>
                <td style="border: none; border-collapse: collapse;">: <?= $data->halaman ?></td>
            </tr>
            <tr>
                <td style="border: none; border-collapse: collapse;">Paragraf</td>
                <td style="border: none; border-collapse: collapse;">: <?= $data->paragraf ?></td>
            </tr>
            <tr>
                <td style="border: none; border-collapse: collapse;">Rasional </td>
                <td style="border: none; border-collapse: collapse;">: <?= $data->rasional ?></td>
            </tr>
        </table>
        <br><br><br>
        <div style="text-align: right;">Pekalongan, <?= date("d M, Y") ?></div>
        <br>
        <table style="border: none; border-collapse: collapse;">
            <tr>
                <td width="50%">
                    <div style="text-align: center;">Pengusul</div>
                    <br><br><br><br><br><br>
                    <div style="text-align: center;">(................................................)</div>
                </td>
                <td width="50%">
                    <div style="text-align: center;">Mengetahui Ketua/Kepala Lembaga/Biro/Unit/Fakultas/Prodi*</div>
                    <br><br><br><br><br>
                    <div style="text-align: center;">(................................................)</div>
                </td>
            </tr>
        </table>
        <br><br><br>
        <div style="font-size: 8px;"><i>*(Coret yang tidak dipilih)</i></div>
    </div>
</div>