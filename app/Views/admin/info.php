<?php
$this->extend('template/admin');
$this->section('content');
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Informasi</h1>
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
                <li><a class="dropdown-item" href="#">Jul-2023</a></li>
                <li><a class="dropdown-item" href="#">Aug-2023</a></li>
                <li><a class="dropdown-item" href="#">Sep-2023</a></li>
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
            <th>Tanggal</th>
            <th>Informasi</th>
            <th>Bobot</th>
            <th class="text-center">Opsi</th>
        </tr>
        <tr>
            <td>1</td>
            <td>2023-07-13</td>
            <td>Masa Pengenalan Sekolah</td>
            <td>2</td>
            <td class="text-end">
                <a href="" class="btn btn-sm btn-primary"><span data-feather="edit"></span></a>
                <a href="" class="btn btn-sm btn-danger"><span data-feather="trash"></span></a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>2023-08-17</td>
            <td>Perlombaan HUT RI</td>
            <td>1</td>
            <td class="text-end">
                <a href="" class="btn btn-sm btn-primary"><span data-feather="edit"></span></a>
                <a href="" class="btn btn-sm btn-danger"><span data-feather="trash"></span></a>
            </td>
        </tr>
    </table>
</main>

<?php $this->endSection();  ?>