<?php
$this->extend('template/main');
$this->section('content');
?>

<style>
    .snd-post {
        min-width: 100%;
        height: 16rem;
    }
</style>

<img src="<?= uploaded($blog['image'], 'img/galeri', 'default.jpg') ?>" class="rounded w-100" alt="">

<div class="row mt-4">
    <div class="col-md-8">
        <article class="blog-post mx-sm-2 ms-md-2">
            <h1 class="blog-post-title"><?= $blog['judul'] ?></h1>
            <p class="blog-post-meta"><?= date_format(date_create($blog['created']), 'l, j M Y') ?> by <a href="#"><?= $blog['autor'] ?></a></p>
            <br>
            <div style="text-align: justify;">
                <?= $blog['body'] ?>
            </div>
        </article>
    </div>

    <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
            <?= $this->include('template/side-agenda') ?>
            <?= $this->include('template/side-links') ?>
        </div>
    </div>
</div>

<div class="row mt-4">
    <?php foreach ($relate as $item) : ?>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
                <div class="col-12 col-lg-8 p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"><?= $item['kategori'] ?></strong>
                    <h3 class="mb-0"><?= $item['judul'] ?></h3>
                    <div class="mb-1 text-muted"><?= date_format(date_create($item['created']), 'l, j M Y') ?></div>
                    <p class="card-text mb-auto"><?= substr($item['excerpt'], 0, 50) ?>...</p>
                    <a href="/blog/<?= $item['id'] ?>" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-4 d-none d-lg-block">
                    <img class="snd-post" src="<?= uploaded($item['image'], 'img/galeri', 'default.jpg') ?>" alt="">
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php $this->endSection();  ?>