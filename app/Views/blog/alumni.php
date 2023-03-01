<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="row g-5 mt-2 px-2">
    <div class="col">
        <article class="blog-post">
            <h2 class="blog-post-title">Alumni SMPT Bugelan</h2>
            <p class="blog-post-meta mb-5">Update <?= $profil['periode'] ?></p>

            <table class="table table-hover align-middle">
                <tr>
                    <th>Pic</th>
                    <th>Nama</th>
                    <th class="d-none d-lg-table-cell">Tgl Lahir</th>
                    <th>Ayah</th>
                    <th class="d-none d-lg-table-cell">Pendidikan</th>
                    <th>Kelulusan</th>
                </tr>
                <?php foreach ($alumni as $row) : ?>
                    <tr>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#detailInfo">
                                <img src="<?= uploaded(($row) ? $row['id'] . '.png' : '', '/img/profile') ?>" class="w5 rounded-circle" style="max-width: 50px;">
                            </a>
                        </td>
                        <td><?= $row['nama'] ?></td>
                        <td class="d-none d-lg-table-cell"><?= $row['tanggal_lahir'] ?></td>
                        <td><?= $row['nama_ayah'] ?></td>
                        <td class="d-none d-lg-table-cell"></td>
                        <td>
                            <span class="badge rounded-pill bg-success"><?= $row['tahun'] + 3 ?></span>
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
                <h5 class="modal-title" id="detailLabel">Portofolio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img src="<?= base_url() ?>/img/profile/no.png" class="img w-50 rounded mb-4">
                    <h3>Bambang Sujatmika</h3>
                    <h5>Alumni 2020</h5>
                </div>
                <div class="row my-4">
                    <div class="col-6 text-end">Tgl Lahir</div>
                    <div class="col-6">12 Jan 2005</div>
                    <div class="col-6 text-end">Ayah</div>
                    <div class="col-6">Sumanto</div>
                    <div class="col-6 text-end">Ibu</div>
                    <div class="col-6">Sumingkem</div>
                    <div class="col-6 text-end">Pekerjaan</div>
                    <div class="col-6">Mahasiswa</div>
                </div>
                <div class="mb-4">
                    <h5 class="text-center mb-3">Pendidikan</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Universitas Galuh<span class="badge rounded-pill bg-warning float-end">Now</span></li>
                        <li class="list-group-item">SMA 7 Tasikmalaya<span class="badge rounded-pill bg-success float-end">2023</span></li>
                        <li class="list-group-item">SMPT Bugelan<span class="badge rounded-pill bg-success float-end">2020</span></li>
                        <li class="list-group-item">SD Manarul Huda<span class="badge rounded-pill bg-success float-end">2010</span></li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h5 class="text-center mb-3">Prestasi & Kompetensi</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Olimpiade Matematika - 2023<span class="badge rounded-pill bg-info float-end">Peserta</span></li>
                        <li class="list-group-item">Pentas PAI - 2022<span class="badge rounded-pill bg-info float-end">Juara 2</span></li>
                        <li class="list-group-item">OSIS SMPT Bugelan<span class="badge rounded-pill bg-info float-end">Bag. Kebersihan</span></li>
                        <li class="list-group-item">Parade Tasmi SMPT Bugelan<span class="badge rounded-pill bg-info float-end">Peserta</span></li>
                    </ul>
                </div>
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Be Smart!</h4>
                    <p>This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection();  ?>