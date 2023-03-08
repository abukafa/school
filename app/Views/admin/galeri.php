<?php
$this->extend('template/admin');
$this->section('content');
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Galeri</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
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

    <div class="album py-2 mt-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach ($galeri as $row) : ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <div style="overflow: hidden;">
                            <img src="<?= base_url() ?>/img/galeri/<?= $row['image'] ?>" style="height:300px;width:100%" alt="">
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?= $row['judul'] ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button data-id="<?= $row['id'] ?>" type="button" class="btn btn-sm btn-outline-secondary view-detail" data-bs-toggle="modal" data-bs-target="#modalData">View</button>
                                </div>
                                <small class="text-muted"><?= date_format(date_create($row['created']), 'd M Y') ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<div class="modal fade" id="modalData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="">
                    <img src="/img/galeri/default.jpg" class="img-fluid rounded image">
                </div>
                <div class="">
                    <div class="card-body">
                        <h5 class="card-title judul">Card title</h5>
                        <p class="card-text excerpt">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text kategori"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="" target="_blank" type="button" class="btn btn-primary go-blog">Read Blog</a>
            </div>
        </div>
    </div>
</div>

<script>
    $('.view-detail').click(function() {
        const id = $(this).data('id');
        $.ajax({
            url: '/data/blog-get/' + id,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('.image').attr('src', '/img/galeri/' + data.image)
                $('.judul').html(data.judul)
                $('.kategori').html(data.kategori)
                $('.excerpt').html(data.excerpt + '...')
                $('.go-blog').attr('href', '/blog/' + id)
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    })
</script>

<?php $this->endSection();  ?>