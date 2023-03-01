<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="row g-5 mt-2 ps-2">
    <div class="col">
        <article class="blog-post text-center">
            <h2 class="blog-post-title">Staff Pengajar</h2>
            <p class="blog-post-meta mb-5">Periode <?= $profil['periode'] . '-' . ($profil['periode'] + 1) ?></p>
        </article>
        <div class="row">
            <?php foreach ($guru as $key => $row) : ?>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card p-2">
                        <a href="" data-bs-toggle="modal" data-bs-target="#detailInfo" class="modalDetail" data-id="<?= $row['id'] ?>">
                            <img src="<?= uploaded(($row) ? $row['id'] . '.png' : '', '/img/profile') ?>" class="rounded mb-2 w-100 h-100" />
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $row['nama'] ?></h5>
                            <?php
                            $ket = explode(',', $row['ket']);
                            for ($i = 0; $i < count($ket); $i++) {
                            ?>
                                <span class="badge rounded-pill bg-primary"><?= $ket[$i] ?></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
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
                    <img id="pic" src="" class="img rounded-circle mb-4 w-50" />
                    <h3 id="nama"></h3>
                    <div id="tugas"></div>
                </div>
                <div class="row my-4">
                    <div class="col-6 text-end">Tgl Lahir :</div>
                    <div id="tgl_lhr" id class="col-6"></div>
                    <div class="col-6 text-end">Asal :</div>
                    <div id="asal" class="col-6"></div>
                    <div class="col-6 text-end">E-mail :</div>
                    <div id="email" class="col-6"></div>
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

<script>
    $('.modalDetail').on('click', function() {
        const id = $(this).data('id')
        $.ajax({
            url: '/admin/member/' + id,
            method: 'get',
            dataType: 'json',
            success: function(data) {
                $('#nama').html(data.member.nama)
                $('#pic').attr('src', '<?= uploaded("' + id + '.png", "/img/profile") ?>')
                if (data.member.ket) {
                    const string = data.member.ket
                    const array = string.split(',')
                    const count = array.length
                    for (i = 0; i < count; i++) {
                        $('#tugas').append('<span class="badge rounded-pill bg-primary">' + array[i] + '</span>')
                    }
                }
                $('#tgl_lahir').html(data.member.taggal_lahir)
                $('#asal').html(data.member.kecamatan)
                $('#email').html(data.member.email)
            }
        });
    });
</script>

<?php $this->endSection();  ?>