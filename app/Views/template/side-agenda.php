<?php

use App\Models\InfoModel;
use App\Models\KalenderModel;

$informasi = new InfoModel();
$kalender = new KalenderModel();
$info = $informasi->limit(3)->orderBy('tgl_awal')->findAll();
$kald = $kalender->limit(3)->orderBy('tgl_awal')->findAll();
?>

<div class="p-4 mb-3 bg-light rounded">
    <div class="bd-example">
        <nav>
            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-first-tab" data-bs-toggle="tab" data-bs-target="#nav-first" type="button" role="tab" aria-controls="nav-first" aria-selected="false">Agenda</button>
                <button class="nav-link" id="nav-second-tab" data-bs-toggle="tab" data-bs-target="#nav-second" type="button" role="tab" aria-controls="nav-second" aria-selected="true">Kalender</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
                <?php foreach ($info as $row) : ?>
                    <p class="text-success"><?= $row['tentang'] ?></p>
                    <footer class="blockquote-footer"><?= date_format(date_create($row['tgl_awal']), 'l, j M Y') ?></footer>
                    <hr>
                <?php endforeach; ?>
            </div>
            <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
                <?php foreach ($kald as $row) : ?>
                    <p class="text-success"><?= $row['jenis'] . ' - ' . $row['acara'] ?></p>
                    <footer class="blockquote-footer"><?= date_format(date_create($row['tgl_awal']), 'l, j M Y') ?></footer>
                    <hr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>