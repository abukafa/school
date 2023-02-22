<?php
$this->extend('template/main');
$this->section('content');
?>

<!-- Custom styles for this template -->
<link href="css/carousel.css" rel="stylesheet">

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/photo/1.jpeg" alt="">

            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Be Smart, Be The One, Be The Best.</h1>
                    <p>Jadilah Pandai, Jadilah nomor satu, dan jadilah yang terbaik.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/photo/2.jpeg" alt="">

            <div class="container">
                <div class="carousel-caption">
                    <h1>Be Smart, Be The One, Be The Best.</h1>
                    <p>Jadilah Pandai, Jadilah nomor satu, dan jadilah yang terbaik.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/photo/3.jpeg" alt="">

            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>Be Smart, Be The One, Be The Best.</h1>
                    <p>Jadilah Pandai, Jadilah nomor satu, dan jadilah yang terbaik.</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="row row-cols-1 row-cols-sm-2 g-4 py-4">
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#home"></use>
                </svg>
                <div>
                    <h4 class="fw-bold mb-0">Berkarakter</h4>
                    <p>Menumbuhkan karakter dan kemandirian dalam kegiatan belajar.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#cpu-fill"></use>
                </svg>
                <div>
                    <h4 class="fw-bold mb-0">Berteknologi</h4>
                    <p>Berani berkarya & berinovasi dalam bidang Teknologi & Informasi.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#geo-fill"></use>
                </svg>
                <div>
                    <h4 class="fw-bold mb-0">Berwirausaha</h4>
                    <p>Menumbuhkan semangat berwirausaha dan Enterpreneurship.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                <div>
                    <h4 class="fw-bold mb-0">Berorganisasi</h4>
                    <p>Aktif dalam kegiatan organisasi dan pengembangan diri.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">Prakata Kepala Sekolah</strong>
                <h3 class="mb-0">Asep Irfan Helmi, S.T</h3>
                <div class="mb-1 text-muted">Senin, 18 Juli 2022</div>
                <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="/prakata" class="stretched-link">Lanjut baca</a>
            </div>
            <div class="col-auto d-md-block d-none">
                <img src="img/photo/kepsek.jpg" width="200" height="250" alt="">
            </div>
        </div>
    </div>
</div>

<div class="row g-5 mt-3">
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom text-success">
            Blog Terbaru
        </h3>

        <article class="blog-post">
            <h2 class="blog-post-title">Sample blog post</h2>
            <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>


            <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
        </article>

        <hr class="my-4">

        <article class="blog-post">
            <h2 class="blog-post-title">New feature</h2>
            <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>

            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <ul>
                <li>First list item</li>
                <li>Second list item with a longer description</li>
                <li>Third list item to close it out</li>
            </ul>
            <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
        </article>
    </div>

    <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
            <?= $this->include('template/side-agenda') ?>
            <?= $this->include('template/side-pooling') ?>
        </div>
    </div>
</div>

<?= $this->include('template/foot-galeri') ?>

<?php $this->endSection();  ?>