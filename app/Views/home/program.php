<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="row g-5 mt-2 ps-2">
    <div class="col-md-8">
        <article class="blog-post">
            <h2 class="blog-post-title">Program Unggulan</h2>
            <p class="blog-post-meta mb-5">December 14, 2020 by <a href="#">Chris</a></p>

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
            <?= $this->include('template/side-links') ?>
            <?= $this->include('template/side-posts') ?>
        </div>
    </div>
</div>

<?= $this->include('template/foot-galeri') ?>

<?php $this->endSection();  ?>