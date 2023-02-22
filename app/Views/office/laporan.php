<?php
$this->extend('template/admin');
$this->section('content');
?>

<style>
    .this-btn {
        padding-top: 1.75rem;
    }
</style>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Laporan</h1>
    </div>
    <div class="row">
        <div class='col-md-3 mb-2'>
            <label class='form-label' for='tabel'>Tabel</label>
            <select type='text' class='form-select' name='tabel' id='tabel'>
                <option value=''>.. pilih ..</option>
            </select>
        </div>
        <div class='col-md-7 mb-2'>
            <label class='form-label' for='kondisi'>Kondisi</label>
            <select type='text' class='form-select' name='kondisi' id='kondisi'>
                <option value=''>.. pilih ..</option>
            </select>
        </div>
        <div class='this-btn col-md-2 mb-2'>
            <a href="" class="btn btn-primary w-100"><span data-feather="printer"></span></a>
        </div>
    </div>
</main>

<?php $this->endSection();  ?>