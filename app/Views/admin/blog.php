<?php
$this->extend('template/admin');
$this->section('content');
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Konten Blog</h1>
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
                <li><a class="dropdown-item" href="#">Hari ini</a></li>
                <li><a class="dropdown-item" href="#">Pekan ini</a></li>
                <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Semua Data</a></li>
            </ul>
        </div>
    </div>
    <table class="table table-hover text-center align-middle mt-5">
        <tr>
            <th>Pic</th>
            <th>Post</th>
            <th>Opsi</th>
        </tr>
        <tr>
            <td><img src="<?= base_url() ?>/img/photo/g01.jpeg" class="img rounded" width="100" alt=""></td>
            <td class="text-start">
                <p class="mb-0 text-success">Amet consectetur adipisicing adipisicing.</p>
                <small>Vivian, 12 Jan 2023</small>
            </td>
            <td class="text-end">
                <button class="btn btn-sm btn-primary"><span data-feather="edit"></span></button>
                <button class="btn btn-sm btn-danger"><span data-feather="trash"></span></button>
            </td>
        </tr>
        <tr>
            <td><img src="<?= base_url() ?>/img/photo/g01.jpeg" class="img rounded" width="100" alt=""></td>
            <td class="text-start">
                <p class="mb-0 text-success">Amet consectetur adipisicing adipisicing.</p>
                <small>Vivian, 12 Jan 2023</small>
            </td>
            <td class="text-end">
                <button class="btn btn-sm btn-primary"><span data-feather="edit"></span></button>
                <button class="btn btn-sm btn-danger"><span data-feather="trash"></span></button>
            </td>
        </tr>
    </table>
</main>

<?php $this->endSection();  ?>