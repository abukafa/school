<?php

use App\Models\BlogModel;

$blogModel = new BlogModel();
$latest = $blogModel->findAll();
$spec_data = array_slice($latest, -3);
?>

<div class="p-4 mb-3 bg-light rounded">
    <h4 class="fst-italic">Postingan Terbaru</h4>
    <div class="row">
        <?php foreach ($spec_data as $col) :  ?>
            <hr class="mt-3">
            <div class="col-4 col-md-12 col-xl-4" style="overflow: hidden;">
                <img src="<?= uploaded($col['image'], 'img/galeri', 'default.jpg')  ?>" class="img rounded" style="height:125px;min-width:100%;">
            </div>
            <div class="col-6 col-md-12 col-xl-6">
                <p class="mb-0 text-success"><?= $col['judul'] ?></p>
                <em><?= date_format(date_create($col['created']), 'l, j M Y') ?></em>
                <br><em><?= $col['autor'] ?></em>
            </div>
        <?php endforeach; ?>
    </div>
</div>