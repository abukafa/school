<?php
$this->extend('template/admin');
$this->section('content');

flash_alert()
?>

<style>
    .snd-post {
        min-width: 7rem;
        height: 7rem;
    }
</style>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Konten Blogs</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/data/blog/0" type="button" class="btn btn-sm btn-outline-secondary">Input Baru</a>
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
            <th>No</th>
            <th>Pic</th>
            <th>Post</th>
            <th>Opsi</th>
        </tr>
        <?php $no = 1;
        foreach ($blog as $row) : ?>
            <tr>
                <td><?= $no ?></td>
                <td><img src="<?= uploaded($row['image'], '/img/galeri', 'default.jpg') ?>" class="img rounded snd-post" width="100" alt=""></td>
                <td class="text-start">
                    <p class="mb-0 text-success"><?= $row['judul'] ?></p>
                    <small><?= $row['autor'] . ', ' . date_format(date_create($row['created']), 'd M Y') ?></small>
                    <p style="text-align: justify;"><?= substr($row['excerpt'], 0, 200) ?>...</p>
                </td>
                <td class="text-end">
                    <a href="/data/blog/<?= $row['id'] ?>" class="btn btn-sm btn-primary"><span data-feather="edit"></span></a>
                    <form action="/data/blog/<?= $row['id']; ?>" method="post" class="d-inline" id="delete-<?= $row['id'] ?>">
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