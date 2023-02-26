<?php
$this->extend('template/admin');
$this->section('content');

flash_alert();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Guru</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a type="button" href="/admin/biodata/0" class="btn btn-sm btn-outline-secondary">Data Baru</a>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" id="dropdownFilter" data-bs-toggle="dropdown" aria-expanded="true">
                <span data-feather="user"></span>
                Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownFilter" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);">
                <li>
                    <h6 class="dropdown-header">Tampilkan Data</h6>
                </li>
                <li><a class="dropdown-item" href="/admin/guru/Guru">Guru</a></li>
                <li><a class="dropdown-item" href="/admin/guru/Staff">Staff</a></li>
                <li><a class="dropdown-item" href="/admin/guru/Pengurus">Pengurus</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/admin/guru/">Semua Data</a></li>
            </ul>
        </div>
    </div>
    <table class="table table-hover mt-5 align-middle">
        <tr>
            <th>No</th>
            <th>No. Induk</th>
            <th>Nama</th>
            <th class="d-none d-xl-table-cell">Asal</th>
            <th class="d-none d-xl-table-cell">Keterangan</th>
            <th class="text-center">Opsi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($guru as $row) : ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row['ni'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td class="d-none d-xl-table-cell"><?= $row['kecamatan'] ?></td>
                <td class="d-none d-xl-table-cell"><?= $row['ket'] ?></td>
                <td class="text-end">
                    <a href="/admin/biodata/<?= $row['id'] ?>" class="btn btn-sm btn-primary"><span data-feather="edit"></span></a>
                    <form action="/admin/biodata/<?= $row['id']; ?>" method="post" class="d-inline" id="delete-<?= $row['id'] ?>">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="delete">
                        <button type="button" class="btn btn-sm btn-danger delete-<?= $row['id'] ?>"><span data-feather="trash"></span></button>
                    </form>
                    <script>
                        $('.delete-<?= $row['id'] ?>').click(function() {
                            swal({
                                title: 'Anda yakin?',
                                text: "Data tidak bisa dikembalikan!",
                                type: 'warning',
                                showCancelButton: true,
                                confirmButtonClass: 'btn btn-success',
                                cancelButtonClass: 'btn btn-danger m-l-10',
                                confirmButtonText: 'Hapus!'
                            }).then(function() {
                                $('#delete-<?= $row['id'] ?>').submit();
                            })
                        });
                    </script>
                </td>
            </tr>
        <?php $no++;
        endforeach; ?>
    </table>
</main>

<?php $this->endSection();  ?>