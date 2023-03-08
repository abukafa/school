<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="row g-5 mt-2 px-2">
    <div class="col">
        <article class="blog-post">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap ">
                <div class="col-6">
                    <h2 class="blog-post-title">Alumni SMPT Bugelan</h2>
                    <p class="blog-post-meta mb-5">Update <?= $profil['periode'] ?></p>
                </div>
                <div class="col-6 text-end pt-2">
                    <button type="button" class="btn btn-sm btn-outline-success dropdown-toggle" id="dropdownFilter" data-bs-toggle="dropdown" aria-expanded="true">
                        <span data-feather="calendar"></span>
                        Tahun
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownFilter" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);">
                        <?php
                        $prd = $profil['periode'];
                        for ($i = $prd; $i > 2014; $i--) {
                        ?>
                            <li><a class="dropdown-item" href="/alumni/<?= $i - 3 ?>"><?= $i ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

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
                            <a href="" data-id="<?= $row['id'] ?>" data-bs-toggle="modal" data-bs-target="#detailInfo" class="modalDetail">
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
                    <img id="pic" src="/img/profile/no.png" class="img rounded-circle mb-4 w-50" />
                    <h3 id="nama">Nama Saya</h3>
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
                    <ul class="list-group pendidikan">
                        <li class="list-group-item">Universitas Galuh<span class="badge rounded-pill bg-warning float-end">Now</span></li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h5 class="text-center mb-3">Kompetensi</h5>
                    <ul class="list-group kompetensi">
                        <li class="list-group-item">Olimpiade Matematika - 2023<span class="badge rounded-pill bg-info float-end">Peserta</span></li>
                    </ul>
                </div>
                <div class="alert alert-success" role="alert">
                    <div id="kesan">
                        <p>This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    </div>
                    <hr>
                    <div id="pesan">
                        <p>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer mb-4">
                <a href="Https://wa.me/+6287733807998" type="button" class="btn btn-success"><span data-feather="phone"></span></a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Fungsi Left
    function left(str, n) {
        return str.slice(0, n);
    }
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

    $('.modalDetail').click(function() {
        const id = $(this).data('id');
        $.ajax({
            url: '/admin/mem-kom/' + id,
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                fileExists('/img/profile/' + id + '.png').then((exists) => {
                    if (exists) {
                        $('#pic').attr('src', '/img/profile/' + id + '.png')
                    } else {
                        $('#pic').attr('src', '/img/profile/no.png')
                    }
                });
                $('#nama').html(data.member.nama)
                $('#tugas').html('');
                if (data.member.ket) {
                    const string = data.member.ket
                    const array = string.split(',')
                    const count = array.length
                    for (i = 0; i < count; i++) {
                        $('#tugas').append('<span class="badge rounded-pill bg-primary me-1">' + array[i] + '</span>')
                    }
                }
                $('#tgl_lahir').html(data.member.taggal_lahir)
                $('#asal').html(data.member.kecamatan)
                $('#email').html(data.member.email)
                $('#kesan').html('<p>' + data.member.kesan + '</p>')
                $('#pesan').html('<p>' + data.member.pesan + '</p>')
                $('.pendidikan').html('');
                $('.kompetensi').html('');
                const komp = data.kompetensi
                const con = komp.length
                for (i = 0; i < con; i++) {
                    if (data.kompetensi[i].jenis == 'Pendidikan') {
                        let sekarang = new Date();
                        let now = sekarang.getFullYear();
                        let thn = left(data.kompetensi[i].tgl_ahir, 4);
                        if (thn > now) {
                            $('.pendidikan').append('<li class="list-group-item">' + data.kompetensi[i].tempat + '<span class="badge rounded-pill bg-info float-end">' + thn + '</span></li>')
                        } else {
                            $('.pendidikan').append('<li class="list-group-item">' + data.kompetensi[i].tempat + '<span class="badge rounded-pill bg-warning float-end">now</span></li>')
                        }
                    } else {
                        $('.kompetensi').append('<li class="list-group-item">' + data.kompetensi[i].tempat + '<span class="badge rounded-pill bg-info float-end">' + data.kompetensi[i].hasil + '</span></li>')
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>

<?php $this->endSection();  ?>