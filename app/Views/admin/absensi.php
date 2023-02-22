<?php
$this->extend('template/admin');
$this->section('content');
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Absensi</h1>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" id="dropdownFilter" data-bs-toggle="dropdown" aria-expanded="true">
            <span data-feather="calendar"></span>
            Filter
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownFilter" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);">
            <li>
                <h6 class="dropdown-header">Tampilkan Data</h6>
            </li>
            <li><a class="dropdown-item" href="#">Kelas VII</a></li>
            <li><a class="dropdown-item" href="#">Kelas VIII</a></li>
            <li><a class="dropdown-item" href="#">Kelas IX</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Semua Data</a></li>
        </ul>
    </div>
    <table class="table table-bordered mt-5 text-center align-middle">
        <tr>
            <th rowspan="2">Nama</th>
            <th colspan="5">Kehadiran</th>
            <th rowspan="2">Ket</th>
        </tr>
        <tr>
            <th>Dh</th>
            <th>08</th>
            <th>10</th>
            <th>Dz</th>
            <th>13</th>
        </tr>
        <tr>
            <td class="text-start">Anggraeni</td>
            <td>
                <input type="checkbox" class="form-check-input" id="h1">
            </td>
            <td>
                <input type="checkbox" class="form-check-input" id="h2">
            </td>
            <td>
                <input type="checkbox" class="form-check-input" id="h3">
            </td>
            <td>
                <input type="checkbox" class="form-check-input" id="h4">
            </td>
            <td>
                <input type="checkbox" class="form-check-input" id="h5">
            </td>
            <td>
                <a href=""><span class="badge rounded-pill bg-primary">!</span></a>
            </td>
        </tr>
    </table>
</main>

<?php $this->endSection();  ?>