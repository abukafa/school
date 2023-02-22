<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="row g-5 mt-2 ps-2">
    <div class="col-md-8">
        <article class="blog-post">
            <h2 class="blog-post-title">Pengumuman</h2>
            <p class="blog-post-meta mb-5">December 14, 2020 by <a href="#">Chris</a></p>
        </article>

        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        </div>

        <ul class="list-group">
            <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
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