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
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap ">
                <div class="col-6">
                    <h2 class="blog-post-title">Siswa SMPT Bugelan</h2>
                    <p class="blog-post-meta mb-5">Periode <?= $profil['periode'] . '-' . ($profil['periode'] + 1) ?></p>
                </div>
                <div class="col-6 text-end pt-2">
                    <button type="button" class="btn btn-sm btn-outline-success dropdown-toggle" id="dropdownFilter" data-bs-toggle="dropdown" aria-expanded="true">
                        <span data-feather="user"></span>
                        Kelas
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownFilter" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);">
                        <li>
                            <h6 class="dropdown-header">Tampilkan Data</h6>
                        </li>
                        <li><a class="dropdown-item" href="/siswa/<?= tahun(7) ?>">Kelas VII</a></li>
                        <li><a class="dropdown-item" href="/siswa/<?= tahun(8) ?>">Kelas VIII</a></li>
                        <li><a class="dropdown-item" href="/siswa/<?= tahun(9) ?>">Kelas IX</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/siswa">Semua Data</a></li>
                    </ul>
                </div>
            </div>

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
                        <td><a href="" data-bs-toggle="modal" data-bs-target="#detailInfo"><img src="<?= uploaded(($row) ? $row['id'] . '.png' : '', '/img/profile') ?>" class="w5 rounded-circle view-detail" data-id="<?= $row['id'] ?>"></a></td>
                        <td class="d-none d-lg-table-cell"><?= $row['ni'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td class="d-none d-md-table-cell"><?= kelas($row['tahun']) ?></td>
                        <td>
                            <div class="progress">
                                <?php $jumlah = 0;
                                $hadir = 0;
                                foreach ($absensi as $item) :
                                    if ($item['idm'] == $row['id']) {
                                        $jumlah++;
                                        if ($item['absen'] == '') {
                                            $hadir++;
                                        }
                                    }
                                endforeach;
                                $abs = ($hadir / $jumlah) * 100;
                                ?>
                                <?php if ($abs > 90) { ?>
                                    <div class="progress-bar bg-primary w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?= $abs ?> %</div>
                                <?php } else if ($abs > 70) { ?>
                                    <div class="progress-bar bg-success w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?= $abs ?> %</div>
                                <?php } else if ($abs > 40) { ?>
                                    <div class="progress-bar bg-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?= $abs ?> %</div>
                                <?php } else { ?>
                                    <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?= $abs ?> %</div>
                                <?php } ?>
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
                    <img src="<?= base_url() ?>/img/profile/no.png" class="img w-50 rounded mb-4 image">
                    <h3 class="nama">Ahmad Hasyim</h3>
                    <h5 class="kelas">Kelas IX</h5>
                </div>
                <div class="row my-4">
                    <div class="col-6 text-end">Tgl Lahir</div>
                    <div class="col-6 tgl_lahir">12 Jan 2010</div>
                    <div class="col-6 text-end">Ayah</div>
                    <div class="col-6 ayah">Sutarjo</div>
                    <div class="col-6 text-end">Ibu</div>
                    <div class="col-6 ibu">Suratmi</div>
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
    // Pengecekan File Exist
    function fileExists(url) {
        return new Promise((resolve, reject) => {
            const xhr = new XMLHttpRequest();
            xhr.open('HEAD', url, true);
            xhr.onreadystatechange = function() {
                if (this.readyState === this.DONE) {
                    if (this.status !== 404) {
                        resolve(true);
                    } else {
                        resolve(false);
                    }
                }
            };
            xhr.send();
        });
    }

    $('.view-detail').click(function() {
        const id = $(this).data('id');
        $.ajax({
            url: '/admin/member/' + id,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                fileExists('/img/profile/' + id + '.png').then((exists) => {
                    if (exists) {
                        $('.image').attr('src', '/img/profile/' + id + '.png')
                    } else {
                        $('.image').attr('src', '/img/profile/no.png')
                    }
                });
                $('.nama').html(data.member.nama)
                $('.kelas').html(data.member.tahun)
                $('.tgl_lahir').html(data.member.tgl_lahir)
                $('.ayah').html(data.member.nama_ayah)
                $('.ibu').html(data.member.nama_ibu)
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
        $.ajax({
            url: '/data/absensi-get-idm/' + id,
            type: 'GET',
            dataType: 'json',
            success: function(resp) {
                const h1 = new Date();
                const h2 = new Date();
                const h3 = new Date();
                const h4 = new Date();
                const h5 = new Date();
                const h6 = new Date();
                const options = {
                    weekday: 'long'
                };
                h2.setDate(h2.getDate() - 1);
                h3.setDate(h3.getDate() - 2);
                h4.setDate(h4.getDate() - 3);
                h5.setDate(h5.getDate() - 4);
                h6.setDate(h6.getDate() - 5);
                const ctx = $('#absen');
                const data = {
                    labels: [
                        h6.toLocaleDateString('en-US', options),
                        h5.toLocaleDateString('en-US', options),
                        h4.toLocaleDateString('en-US', options),
                        h3.toLocaleDateString('en-US', options),
                        h2.toLocaleDateString('en-US', options),
                        h1.toLocaleDateString('en-US', options)
                    ],
                    datasets: [{
                        label: 'Keaktifan',
                        data: [resp.h6, resp.h5, resp.h4, resp.h3, resp.h2, resp.h1],
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
            }
        });
    })
</script>

<?php $this->endSection();  ?>