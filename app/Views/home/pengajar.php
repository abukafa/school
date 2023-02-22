<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="row g-5 mt-2 ps-2">
    <div class="col">
        <article class="blog-post text-center">
            <h2 class="blog-post-title">Staff Pengajar</h2>
            <p class="blog-post-meta mb-5">Periode 2022-2023</p>
        </article>
        <div class="row">
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <a href="" data-bs-toggle="modal" data-bs-target="#detailInfo"><img src="img/profile/no.png" class="w-100 h-100"></a>

                    <div class="card-body text-center">
                        <h5 class="card-title">Nama Guru, S.Pd</h5>
                        <span class="badge rounded-pill bg-primary">Pelajaran</span>
                        <span class="badge rounded-pill bg-primary">Kesiswaan</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <a href="" data-bs-toggle="modal" data-bs-target="#detailInfo"><img src="img/profile/no.png" class="w-100 h-100"></a>

                    <div class="card-body text-center">
                        <h5 class="card-title">Nama Guru, S.Pd</h5>
                        <span class="badge rounded-pill bg-primary">Pelajaran</span>
                        <span class="badge rounded-pill bg-primary">Kesiswaan</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <a href="" data-bs-toggle="modal" data-bs-target="#detailInfo"><img src="img/profile/no.png" class="w-100 h-100"></a>

                    <div class="card-body text-center">
                        <h5 class="card-title">Nama Guru, S.Pd</h5>
                        <span class="badge rounded-pill bg-primary">Pelajaran</span>
                        <span class="badge rounded-pill bg-primary">Kesiswaan</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <a href="" data-bs-toggle="modal" data-bs-target="#detailInfo"><img src="img/profile/no.png" class="w-100 h-100"></a>

                    <div class="card-body text-center">
                        <h5 class="card-title">Nama Guru, S.Pd</h5>
                        <span class="badge rounded-pill bg-primary">Pelajaran</span>
                        <span class="badge rounded-pill bg-primary">Kesiswaan</span>
                    </div>
                </div>
            </div>
        </div>
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
                    <img src="<?= base_url() ?>/img/profile/no.png" class="img w-50 rounded-circle mb-4">
                    <h3>Bambang Sujatmika</h3>
                    <span class="badge rounded-pill bg-primary">Matematika</span>
                    <span class="badge rounded-pill bg-primary">Wali Kls 7</span>
                </div>
                <div class="row my-4">
                    <div class="col-6 text-end">Tgl Lahir</div>
                    <div class="col-6">12 Jan 1985</div>
                    <div class="col-6 text-end">Asal</div>
                    <div class="col-6">Cihideung</div>
                    <div class="col-6 text-end">Status</div>
                    <div class="col-6">Menikah</div>
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
                    <h5 class="text-center mb-3">Kompetensi</h5>
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
            <div class="modal-footer mb-4">
                <button type="button" class="btn btn-success"><span data-feather="phone"></span></button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?= $this->include('template/foot-galeri') ?>

<?php $this->endSection();  ?>