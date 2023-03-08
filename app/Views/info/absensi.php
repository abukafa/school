<?php
$this->extend('template/main');
$this->section('content');

$vii = $profil['periode'];
$viii = $profil['periode'] - 1;
$ix = $profil['periode'] - 2;

$vii_hadir = 0;
$viii_hadir = 0;
$ix_hadir = 0;
foreach ($kelas as $item) {
    if ($item['tahun'] == $vii) {
        $vii_jumlah = $item['jumlah'];
    }
    if ($item['tahun'] == $viii) {
        $viii_jumlah = $item['jumlah'];
    }
    if ($item['tahun'] == $ix) {
        $ix_jumlah = $item['jumlah'];
    }
}
foreach ($hadir as $item) {
    if ($item['tahun'] == $vii) {
        $vii_hadir = $item['jumlah'];
    }
    if ($item['tahun'] == $viii) {
        $viii_hadir = $item['jumlah'];
    }
    if ($item['tahun'] == $ix) {
        $ix_hadir = $item['jumlah'];
    }
}
$vii_bl_hadir = $vii_jumlah - $vii_hadir;
$viii_bl_hadir = $viii_jumlah - $viii_hadir;
$ix_bl_hadir = $ix_jumlah - $ix_hadir;
?>

<style>
    .bg-light-success {
        background-color: #3ed48e;
    }

    .bg-light-warning {
        background-color: #d4d43e;
    }
</style>

<div class="row g-5 mt-2 px-2">
    <div class="col">
        <article class="blog-post text-center">
            <h2 class="blog-post-title">Absensi Sekolah</h2>
            <p class="blog-post-meta mb-5"><?= date('l, j M Y') ?></p>
        </article>

        <div class="row">
            <div class="col-lg-4 mb-2 order-1 order-lg-1">
                <div class="card border-5">
                    <div class="card-header">
                        Kehadiran
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <h4 class="card-title">Kelas VII</h4>
                                <h6 class="card-text"><?= $vii_hadir ?> Masuk</h6>
                            </div>
                            <div class="col-7">
                                <canvas id="absen7"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <?= $vii_bl_hadir ?> absen
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-2 order-3 order-lg-2">
                <div class="card border-5">
                    <div class="card-header">
                        Kehadiran
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <h4 class="card-title">Kelas VIII</h4>
                                <h6 class="card-text"><?= $viii_hadir ?> Masuk</h6>
                            </div>
                            <div class="col-7">
                                <canvas id="absen8"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <?= $viii_bl_hadir ?> absen
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-2 order-5 order-lg-3">
                <div class="card border-5">
                    <div class="card-header">
                        Kehadiran
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <h4 class="card-title">Kelas IX</h4>
                                <h6 class="card-text"><?= $ix_hadir ?> Masuk</h6>
                            </div>
                            <div class="col-7">
                                <canvas id="absen9"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <?= $ix_bl_hadir ?> absen
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-2 order-2 order-lg-4">
                <table class="table">
                    <?php foreach ($absen as $row) :
                        if ($row['tahun'] == $vii) {
                            if ($row['absen'] == '') {
                                $minggat = ($row['jam1'] == false ? 1 : 0) + ($row['jam2'] == false ? 1 : 0) + ($row['jam3'] == false ? 1 : 0) + ($row['jam4'] == false ? 1 : 0) + ($row['jam5'] == false ? 1 : 0);
                                if ($minggat > 0) { ?>
                                    <tr>
                                        <th>7</th>
                                        <th><?= $row['panggil'] ?></th>
                                        <td>
                                            <span class="badge rounded-pill bg-dark float-end me-3"><?= $minggat ?></span>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                            <?php if ($row['absen'] <> '') { ?>
                                <tr>
                                    <td>7</td>
                                    <td><?= $row['panggil'] ?></td>
                                    <td>
                                        <?php if ($row['absen'] == 'a') { ?>
                                            <span class="badge rounded-pill bg-danger float-end me-3">alpa</span>
                                        <?php } else if ($row['absen'] == 'i') { ?>
                                            <span class="badge rounded-pill bg-warning float-end me-3">izin</span>
                                        <?php } else if ($row['absen'] == 's') { ?>
                                            <span class="badge rounded-pill bg-info float-end me-3">sakit</span>
                                        <?php } ?>
                                    </td>
                                </tr>
                    <?php   }
                        }
                    endforeach; ?>
                </table>
            </div>
            <div class="col-lg-4 mb-2 order-4 order-lg-5">
                <table class="table">
                    <?php foreach ($absen as $row) :
                        if ($row['tahun'] == $viii) {
                            if ($row['absen'] == '') {
                                $minggat = ($row['jam1'] == false ? 1 : 0) + ($row['jam2'] == false ? 1 : 0) + ($row['jam3'] == false ? 1 : 0) + ($row['jam4'] == false ? 1 : 0) + ($row['jam5'] == false ? 1 : 0);
                                if ($minggat > 0) { ?>
                                    <tr>
                                        <th>8</th>
                                        <th><?= $row['panggil'] ?></th>
                                        <td>
                                            <span class="badge rounded-pill bg-dark float-end me-3"><?= $minggat ?></span>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                            <?php if ($row['absen'] <> '') { ?>
                                <tr>
                                    <td>8</td>
                                    <td><?= $row['panggil'] ?></td>
                                    <td>
                                        <?php if ($row['absen'] == 'a') { ?>
                                            <span class="badge rounded-pill bg-danger float-end me-3">alpa</span>
                                        <?php } else if ($row['absen'] == 'i') { ?>
                                            <span class="badge rounded-pill bg-warning float-end me-3">izin</span>
                                        <?php } else if ($row['absen'] == 's') { ?>
                                            <span class="badge rounded-pill bg-info float-end me-3">sakit</span>
                                        <?php } ?>
                                    </td>
                                </tr>
                    <?php   }
                        }
                    endforeach; ?>
                </table>
            </div>
            <div class="col-lg-4 mb-2 order-last order-lg-6">
                <table class="table">
                    <?php foreach ($absen as $row) :
                        if ($row['tahun'] == $ix) {
                            if ($row['absen'] == '') {
                                $minggat = ($row['jam1'] == false ? 1 : 0) + ($row['jam2'] == false ? 1 : 0) + ($row['jam3'] == false ? 1 : 0) + ($row['jam4'] == false ? 1 : 0) + ($row['jam5'] == false ? 1 : 0);
                                if ($minggat > 0) { ?>
                                    <tr>
                                        <th>9</th>
                                        <th><?= $row['panggil'] ?></th>
                                        <td>
                                            <span class="badge rounded-pill bg-dark float-end me-3"><?= $minggat ?></span>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                            <?php if ($row['absen'] <> '') { ?>
                                <tr>
                                    <td>9</td>
                                    <td><?= $row['panggil'] ?></td>
                                    <td>
                                        <?php if ($row['absen'] == 'a') { ?>
                                            <span class="badge rounded-pill bg-danger float-end me-3">alpa</span>
                                        <?php } else if ($row['absen'] == 'i') { ?>
                                            <span class="badge rounded-pill bg-warning float-end me-3">izin</span>
                                        <?php } else if ($row['absen'] == 's') { ?>
                                            <span class="badge rounded-pill bg-info float-end me-3">sakit</span>
                                        <?php } ?>
                                    </td>
                                </tr>
                    <?php   }
                        }
                    endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>/js/chart.min.js"></script>
<script>
    var vii_hadir = <?= $vii_hadir ?>;
    var viii_hadir = <?= $viii_hadir ?>;
    var ix_hadir = <?= $ix_hadir ?>;
    var vii_absen = <?= $vii_bl_hadir ?>;
    var viii_absen = <?= $viii_bl_hadir ?>;
    var ix_absen = <?= $ix_bl_hadir ?>;

    var cta = document.getElementById('absen7')
    var yourChart = new Chart(cta, {
        type: 'pie',
        data: {
            datasets: [{
                data: [vii_hadir, vii_absen],
                backgroundColor: ['#3ed48e', '#d4d43e']
            }]
        }
    });
    var cta = document.getElementById('absen8')
    var yourChart = new Chart(cta, {
        type: 'pie',
        data: {
            datasets: [{
                data: [viii_hadir, viii_absen],
                backgroundColor: ['#3ed48e', '#d4d43e']
            }]
        }
    });
    var cta = document.getElementById('absen9')
    var yourChart = new Chart(cta, {
        type: 'pie',
        data: {
            datasets: [{
                data: [ix_hadir, ix_absen],
                backgroundColor: ['#3ed48e', '#d4d43e']
            }]
        }
    });
</script>

<?php $this->endSection();  ?>