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
    <img src="img/photo/1.jpeg" class="rounded w-100" alt="">
    <div class="col px-0 mt-3">
        <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
        <p class="lead mb-0"><a href="/blog/1" class="text-white fw-bold">Continue reading...</a></p>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col-8 p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">World</strong>
                <h3 class="mb-0">Featured post</h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content. a natural lead-in to additional content.</p>
                <a href="#" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-4">
                <img class="snd-post" src="img/photo/2.jpeg" alt="">
            </div>
        </div>

        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col-8 p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">World</strong>
                <h3 class="mb-0">Featured post</h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content. a natural lead-in to additional content.</p>
                <a href="#" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-4">
                <img class="snd-post" src="img/photo/1.jpeg" alt="">
            </div>
        </div>

        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col-8 p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">World</strong>
                <h3 class="mb-0">Featured post</h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content. a natural lead-in to additional content.</p>
                <a href="#" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-4">
                <img class="snd-post" src="img/photo/3.jpeg" alt="">
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
            <?= $this->include('template/side-agenda') ?>
            <?= $this->include('template/side-links') ?>
        </div>
    </div>
</div>

<?php $this->endSection();  ?>