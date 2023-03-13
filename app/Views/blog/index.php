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

<div class="p-4 p-md-5 pt-2 pt-md-0 mb-4 text-white bg-success">
    <img src="<?= uploaded($latest['image'], 'img/galeri', 'default.jpg') ?>" class="rounded w-100" alt="">
    <div class="col px-0 mt-3">
        <h1 class="display-4 fst-italic"><?= $latest['judul'] ?></h1>
        <p class="lead my-3"><?= substr($latest['excerpt'], 0, 200) ?>...</p>
        <p class="lead mb-0"><a href="/blog/<?= $latest['id'] ?>" class="text-white fw-bold">Lanjutkan baca...</a></p>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <?php foreach ($blog as $item) : ?>
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-8 p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"><?= $item['kategori'] ?></strong>
                    <h3 class="mb-0"><?= $item['judul'] ?></h3>
                    <div class="mb-1 text-muted"><?= date_format(date_create($item['created']), 'l, j M Y') ?></div>
                    <p class="card-text mb-auto"><?= substr($item['excerpt'], 0, 50) ?>...</p>
                    <a href="/blog/<?= $item['id'] ?>" class="stretched-link">Baca...</a>
                </div>
                <div class="col-4">
                    <img class="snd-post" src="<?= uploaded($item['image'], 'img/galeri', 'default.jpg') ?>" alt="">
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
            <?= $this->include('template/side-agenda') ?>
            <?= $this->include('template/side-links') ?>
        </div>
    </div>
</div>

<?php $this->endSection();  ?>