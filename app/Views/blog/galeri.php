<?php
$this->extend('template/main');
$this->section('content');
?>

<section class="py-5 text-center container">
    <div class="row">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Galeri Kegiatan</h1>
            <p class="lead text-muted">Dikelola oleh Organisasi Siswa SMPT Bugelan <br>Periode <?= $profil['periode'] . '-' . ((int)$profil['periode'] + 1) ?></p>
            <p>
                <a href="https://wa.me/<?= $profil['kontak'] ?>" class="btn btn-success my-2">Berikan Masukan</a>
            </p>
        </div>
    </div>
</section>

<div class="album py-2">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach ($galeri as $item) : ?>
            <div class="col">
                <div class="card shadow-sm">
                    <div style="overflow: hidden;">
                        <img src="<?= uploaded($item['image'], 'img/galeri', 'default.jpg') ?>" style="height:300px;min-width:100%;" alt="">
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?= $item['judul'] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button data-id="<?= $item['id'] ?>" type="button" class="btn btn-sm btn-outline-secondary view-detail" data-bs-toggle="modal" data-bs-target="#modalData">View</button>
                            </div>
                            <small class="text-muted"><?= date_format(date_create($item['created']), 'd M Y') ?></small>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

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