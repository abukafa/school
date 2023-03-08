<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="row g-5 mt-2 ps-2">
    <div class="col-md-8">
        <article class="blog-post">
            <h2 class="blog-post-title">Pengumuman</h2>
            <p class="blog-post-meta mb-5"><?= date('l, j M Y') ?></p>
        </article>

        <?php foreach ($headline as $item) : ?>
            <div class="alert alert-success" role="alert">
                <h5 class="alert-heading"><?= $item['tentang'] ?></h5>
                <p><?= $item['detail'] ?></p>
                <hr>
                <p class="mb-0"><?= date_format(date_create($item['tgl_awal']), 'l, j M Y') ?></p>
            </div>
        <?php endforeach; ?>

        <ul class="list-group">
            <?php foreach ($info as $item) : ?>
                <li class="list-group-item"><?= $item['tentang'] ?><span class="float-end"><?= date_format(date_create($item['tgl_awal']), 'l, j M Y') ?></span></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
            <?= $this->include('template/side-links') ?>
            <?= $this->include('template/side-posts') ?>
        </div>
    </div>
</div>

<?= $this->include('template/foot-galeri') ?>

<?php $this->endSection();  ?>