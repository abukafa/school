<?php
$this->extend('template/admin');
$this->section('content');

flash_alert();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profil Sekolah</h1>
    </div>
    <form action="/admin/profil" method="post">
        <div class="row mt-5">
            <div class="col-md-6 mb-2">
                <label class='form-label' for='sekolah'>Nama Sekolah</label>
                <input type='text' class='form-control' name='sekolah' id='sekolah' value="<?= (!$profil) ? '' : $profil['sekolah'] ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class='form-label' for='npsn'>NPSN</label>
                <input type='text' class='form-control' name='npsn' id='npsn' value="<?= (!$profil) ? '' : $profil['npsn'] ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class='form-label' for='yayasan'>Nama Yayasan</label>
                <input type='text' class='form-control' name='yayasan' id='yayasan' value="<?= (!$profil) ? '' : $profil['yayasan'] ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class='form-label' for='no_izin'>Izin Operasional</label>
                <input type='text' class='form-control' name='no_izin' id='no_izin' value="<?= (!$profil) ? '' : $profil['no_izin'] ?>">
            </div>
            <div class="col-12 mb-2">
                <label class='form-label' for='alamat'>Alamat</label>
                <input type='text' class='form-control' name='alamat' id='alamat' value="<?= (!$profil) ? '' : $profil['alamat'] ?>">
            </div>
            <div class="col-12 mb-2">
                <label class='form-label' for='map'>Map Link Lokasi</label>
                <input type='text' class='form-control' name='map' id='map' value="<?= (!$profil) ? '' : $profil['map'] ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class='form-label' for='telepon'>Telephone</label>
                <input type='text' class='form-control' name='telepon' id='telepon' value="<?= (!$profil) ? '' : $profil['telepon'] ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class='form-label' for='email'>E-mail</label>
                <input type='text' class='form-control' name='email' id='email' value="<?= (!$profil) ? '' : $profil['email'] ?>">
            </div>
            <div class='col-12 mb-2'>
                <label class='form-label' for='motto'>Motto Sekolah</label>
                <input type='text' class='form-control' name='motto' id='motto' value="<?= (!$profil) ? '' : $profil['motto'] ?>">
            </div>

            <div class="col-12 py-4">
                <h1 class="h4">Data Akademik</h1>
            </div>

            <div class="col-md-6 mb-2">
                <label class='form-label' for='periode'>Periode</label>
                <div class="input-group">
                    <input type='text' class='form-control' name='periode' id='periode' value="<?= (!$profil) ? '' : $profil['periode'] ?>">
                    <input type='text' class='form-control' name='thn_ahir' id='thn_ahir' readonly>
                </div>
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='kepala'>Kepala Sekolah</label>
                <input type='text' class='form-control' name='kepala' id='kepala' value="<?= (!$profil) ? '' : $profil['kepala'] ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='tema'>Tema Bulanan</label>
                <input type='text' class='form-control' name='tema' id='tema' value="<?= (!$profil) ? '' : $profil['tema'] ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='kontak'>Kontak Informasi</label>
                <input type='text' class='form-control' name='kontak' id='kontak' value="<?= (!$profil) ? '' : $profil['kontak'] ?>">
            </div>
            <div class='col-12 mb-2'>
                <label class='form-label' for='ket'>Keterangan</label>
                <input type='text' class='form-control' name='ket' id='ket' value="<?= (!$profil) ? '' : $profil['ket'] ?>">
            </div>
        </div>
        <div class="my-5">
            <button class="btn btn-primary w-100" type="submit">Simpan</button>
        </div>
    </form>
</main>

<script>
    $('#thn_ahir').val(+$('#periode').val() + 1);
    $('#periode').on('keyup', function() {
        // let date = new Date().getFullYear();
        $('#thn_ahir').val(+this.value + 1);
    })
</script>

<?php $this->endSection();  ?>