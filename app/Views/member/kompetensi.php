<?php
$this->extend('template/admin');
$this->section('content');
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kompetensi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Data Baru</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" id="dropdownFilter" data-bs-toggle="dropdown" aria-expanded="true">
                <span data-feather="calendar"></span>
                Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownFilter" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);">
                <li>
                    <h6 class="dropdown-header">Tampilkan Data</h6>
                </li>
                <li><a class="dropdown-item" href="#">Pendidikan</a></li>
                <li><a class="dropdown-item" href="#">Kompetensi</a></li>
                <li><a class="dropdown-item" href="#">Prestasi</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Semua Data</a></li>
            </ul>
        </div>
    </div>
    <table class="table table-hover mt-5 align-middle">
        <tr>
            <th>No</th>
            <th>Jenis</th>
            <th>Tahun</th>
            <th>Institusi</th>
            <th>Keterangan</th>
            <th>Hasil</th>
            <th class="text-center">Opsi</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Pendidikan</td>
            <td>2010</td>
            <td>MA Nurussalam</td>
            <td>IPS</td>
            <td>3.2</td>
            <td class="text-end">
                <a href="" class="btn btn-sm btn-primary"><span data-feather="edit"></span></a>
                <a href="" class="btn btn-sm btn-danger"><span data-feather="trash"></span></a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Pendidikan</td>
            <td>2012</td>
            <td>Universitas Islam Indonesia</td>
            <td>Pendidikan Agama Islam</td>
            <td>3.2</td>
            <td class="text-end">
                <a href="" class="btn btn-sm btn-primary"><span data-feather="edit"></span></a>
                <a href="" class="btn btn-sm btn-danger"><span data-feather="trash"></span></a>
            </td>
        </tr>
    </table>
</main>

<?php $this->endSection();  ?>