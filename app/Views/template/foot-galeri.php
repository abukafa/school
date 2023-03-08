<?php

use App\Models\BlogModel;

$blogModel = new BlogModel();
$galeri = $blogModel->where('galeri', true)->limit(4)->orderBy('rand()')->get()->getResultArray();
?>

<h3 class="pt-4 my-4 fst-italic border-top text-success">
    Galeri Sekolah
</h3>

<div class="row">
    <?php foreach ($galeri as $col) : ?>
        <div class="col-md-3 mb-2">
            <div class="card" style="overflow: hidden;">
                <a href="/galeri"><img src="img/galeri/<?= $col['image'] ?>" class="rounded img" style="height:250px;min-width:100%"></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>