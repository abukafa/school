<?php
$this->extend('template/main');
$this->section('content');
?>

<style>
    .w5 {
        max-width: 50px;
    }
</style>

<div class="row g-5 mt-2 px-2">
    <div class="col">
        <article class="blog-post">
            <h2 class="blog-post-title">Siswa SMPT Bugelan</h2>
            <p class="blog-post-meta mb-5">Periode <?= $profil['periode'] . '-' . ($profil['periode'] + 1) ?></p>

            <table class="table table-hover align-middle">
                <tr>
                    <th>Pic</th>
                    <th class="d-none d-lg-table-cell">No. Induk</th>
                    <th>Nama</th>
                    <th class="d-none d-md-table-cell">Kelas</th>
                    <th>Keaktifan</th>
                </tr>
                <?php foreach ($siswa as $row) : ?>
                    <tr>
                        <td><a href="" data-bs-toggle="modal" data-bs-target="#detailInfo"><img src="<?= uploaded(($row) ? $row['id'] . '.png' : '', '/img/profile') ?>" class="w5 rounded-circle"></a></td>
                        <td class="d-none d-lg-table-cell"><?= $row['ni'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td class="d-none d-md-table-cell"><?= kelas($row['tahun']) ?></td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </article>
    </div>
</div>

<div class="modal fade" id="detailInfo" tabindex="-1" aria-labelledby="detailLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailLabel">Informasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img src="<?= base_url() ?>/img/profile/no.png" class="img w-50 rounded mb-4">
                    <h3>Ahmad Hasyim</h3>
                    <h5>Kelas IX</h5>
                </div>
                <div class="row my-4">
                    <div class="col-6 text-end">Tgl Lahir</div>
                    <div class="col-6">12 Jan 2010</div>
                    <div class="col-6 text-end">Ayah</div>
                    <div class="col-6">Sutarjo</div>
                    <div class="col-6 text-end">Ibu</div>
                    <div class="col-6">Suratmi</div>
                </div>
                <div class="">
                    <canvas id="absen"></canvas>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>/js/chart.min.js"></script>
<script>
    const ctx = document.getElementById('absen');
    const data = {
        labels: [
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'sabtu'
        ],
        datasets: [{
            label: 'Keaktifan',
            data: [75, 50, 60, 80, 90, 100],
            backgroundColor: [
                'rgb(255, 205, 86, .5)'
            ],
            hoverOffset: 4
        }]
    };
    new Chart(ctx, {
        type: 'line',
        data: data
    });
</script>

<?php $this->endSection();  ?>