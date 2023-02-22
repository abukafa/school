<?php
$this->extend('template/admin');
$this->section('content');

flash_alert();
?>

<link href="<?= base_url() ?>/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Biodata</h1>
    </div>
    <form action="" method="post">
        <div class="row my-5">
            <div class="col text-center">
                <img class="mb-2 rounded-circle" src="<?= base_url() ?>/img/profile/no.png" alt="" width="200" height="200">
                <input type="file" class="form-control" name="pic" id="pic" accept=".jpg" onchange="imgPreview()">
            </div>
        </div>
    </form>
    <form action="<?= (!$member) ? '/admin/biodata' : ((session()->get('member')) ? '/member/biodata/' : '/admin/biodata/') . $member['id'] ?>" method="post">
        <div class="row mb-5">
            <div class='col-md-6 mb-5'>
                <label class='form-label' for='akun'>Jenis Akun</label>
                <select type='text' class='form-select' name='akun' id='akun'>
                    <option><?= ($member) ? $member['akun'] : '' ?></option>
                    <option>Guru</option>
                    <option>Staff</option>
                    <option>Pengurus</option>
                    <option>Siswa</option>
                </select>
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='pass'>Passcode</label>
                <input type='text' class='form-control' name='pass' id='pass' value="<?= ($member) ? $member['pass'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='ni'>Nomor Induk Siswa</label>
                <input type='text' class='form-control' name='ni' id='ni' value="<?= ($member) ? $member['ni'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='tahun'>Tahun Masuk</label>
                <input type='text' class='form-control' name='tahun' id='tahun' value="<?= ($member) ? $member['tahun'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='nama'>Nama Lengkap</label>
                <input type='text' class='form-control' name='nama' id='nama' value="<?= ($member) ? $member['nama'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='panggil'>Panggilan</label>
                <input type='text' class='form-control' name='panggil' id='panggil' value="<?= ($member) ? $member['panggil'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for=''>Jenis Kelamin</label>
                <select type='text' class='form-select' name='jk' id='jk' value="<?= ($member) ? $member['jk'] : '' ?>">
                    <option value=''>.. pilih ..</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='tempat_lahir'>Tempat Tanggal Lahir</label>
                <div class="input-group">
                    <input type='text' class='form-control' name='tempat_lahir' id='tempat_lahir' value="<?= ($member) ? $member['tempat_lahir'] : '' ?>">
                    <input type='text' class='form-control' name='tanggal_lahir' id='tanggal_lahir' value="<?= ($member) ? $member['tanggal_lahir'] : '' ?>">
                </div>
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='nik'>NIK</label>
                <input type='text' class='form-control' name='nik' id='nik' value="<?= ($member) ? $member['nik'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='no_kk'>No. KK</label>
                <input type='text' class='form-control' name='no_kk' id='no_kk' value="<?= ($member) ? $member['no_kk'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='alamat'>Alamat</label>
                <input type='text' class='form-control' name='alamat' id='alamat' value="<?= ($member) ? $member['alamat'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='rt'>RT-RW</label>
                <div class="input-group">
                    <input type='text' class='form-control' name='rt' id='rt' value="<?= ($member) ? $member['rt'] : '' ?>">
                    <input type='text' class='form-control' name='rw' id='rw' value="<?= ($member) ? $member['rw'] : '' ?>">
                </div>
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='kelurahan'>Desa/ Kelurahan</label>
                <input type='text' class='form-control' name='kelurahan' id='kelurahan' value="<?= ($member) ? $member['kelurahan'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='kecamatan'>Kecamatan</label>
                <div class="input-group">
                    <input type='text' class='form-control' name='kecamatan' id='kecamatan' value="<?= ($member) ? $member['kecamatan'] : '' ?>">
                </div>
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='kode_pos'>Kode Pos</label>
                <input type='text' class='form-control' name='kode_pos' id='kode_pos' value="<?= ($member) ? $member['kode_pos'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='kabupaten'>Kabupaten</label>
                <input type='text' class='form-control' name='kabupaten' id='kabupaten' value="<?= ($member) ? $member['kabupaten'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='telepon'>Telepon</label>
                <input type='text' class='form-control' name='telepon' id='telepon' value="<?= ($member) ? $member['telepon'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='email'>E-mail</label>
                <input type='text' class='form-control' name='email' id='email' value="<?= ($member) ? $member['email'] : '' ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class="form-label" for="nama_ayah"><b>Nama Ayah</b></label>
                <input type="text" class="form-control" name="nama_ayah" value="<?= ($member) ? $member['nama_ayah'] : '' ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class="form-label">Tgl Lahir Ayah</label>
                <input type="text" class="form-control" name="tl_ayah" id="tl_ayah" value="<?= ($member) ? $member['tl_ayah'] : '' ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan_ayah" value="<?= ($member) ? $member['pekerjaan_ayah'] : '' ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class="form-label"><b>Nama Ibu</b></label>
                <input type="text" class="form-control" name="nama_ibu" value="<?= ($member) ? $member['nama_ibu'] : '' ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class="form-label">Tgl Lahir Ibu</label>
                <input type="text" class="form-control" name="tl_ibu" id="tl_ibu" value="<?= ($member) ? $member['tl_ibu'] : '' ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan_ibu" value="<?= ($member) ? $member['pekerjaan_ibu'] : '' ?>">
            </div>
            <div class='col-12 mb-2'>
                <label class='form-label' for='kesan'>Kesan</label>
                <input type='text' class='form-control' name='kesan' id='kesan' value="<?= ($member) ? $member['kesan'] : '' ?>">
            </div>
            <div class='col-12 mb-2'>
                <label class='form-label' for='pesan'>Pesan</label>
                <input type='text' class='form-control' name='pesan' id='pesan' value="<?= ($member) ? $member['pesan'] : '' ?>">
            </div>
            <div class='col-12 mb-2'>
                <label class='form-label' for='arsip'>Arsip</label>
                <input type='file' class='form-control' name='arsip' id='arsip' accept='.jpg' value="<?= ($member) ? $member['arsip'] : '' ?>">
            </div>
            <div class='col-12 mb-2'>
                <label class='form-label' for='ket'>Keterangan</label>
                <select type='text' class='form-select' name='ket' id='ket'>
                    <option><?= ($member) ? $member['ket'] : '' ?></option>
                    <option>Satu</option>
                    <option>Dua</option>
                    <option>Tiga</option>
                    <option>Empat</option>
                </select>
            </div>
            <div class="col mt-4">
                <button type="submit" class="btn btn-primary w-100" name="save">Simpan</button>
            </div>
        </div>
    </form>
</main>

<script src="<?= base_url() ?>/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $('#tanggal_lahir').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });
    $('#tl_ayah').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });
    $('#tl_ibu').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });
</script>

<?php $this->endSection();  ?>