<?php

use App\Models\PoolingModel;

$poolingModel = new PoolingModel();
$pool = $poolingModel->findAll();
$r = rand(0, count($pool) - 1);
?>

<div class="p-4 mb-3 bg-light rounded" id="pooling-next">
    <h4 class="fst-italic">Pooling Penilaian <?= $pool[$r]['jenis'] ?></h4>
    <hr>
    <form action="/pooling/<?= $pool[$r]['id'] ?>" method="get">
        <label class="mb-2"><?= $pool[$r]['pertanyaan'] ?></label>
        <fieldset class="mb-3">
            <div class="form-check">
                <input type="radio" name="pooling" class="form-check-input" id="a" value="a">
                <label class="form-check-label" for="a">Semakin Baik</label>
            </div>
            <div class="form-check">
                <input type="radio" name="pooling" class="form-check-input" id="b" value="b">
                <label class="form-check-label" for="b">Baik</label>
            </div>
            <div class="form-check">
                <input type="radio" name="pooling" class="form-check-input" id="c" value="c">
                <label class="form-check-label" for="c">Biasa Saja</label>
            </div>
            <div class="form-check">
                <input type="radio" name="pooling" class="form-check-input" id="d" value="d">
                <label class="form-check-label" for="d">Kurang Baik</label>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>