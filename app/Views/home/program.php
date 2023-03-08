<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="row g-5 mt-2 ps-2">
    <div class="col-md-8">
        <article class="blog-post">
            <h2 class="blog-post-title"><?= $blog['judul'] ?></h2>
            <p class="blog-post-meta mb-5"><?= date_format(date_create($blog['created']), 'l, j M Y') ?> by <a href="#"><?= $blog['autor'] ?></a></p>

            <div style="text-align: justify;">
                <?= $blog['body'] ?>
            </div>
        </article>
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