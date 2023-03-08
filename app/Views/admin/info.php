<?php
$this->extend('template/admin');
$this->section('content');

flash_alert();
?>

<link href="<?= base_url() ?>/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Informasi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary inputInfo" data-bs-toggle="modal" data-bs-target="#modalForm">Data Baru</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" id="dropdownFilter" data-bs-toggle="dropdown" aria-expanded="true">
                <span data-feather="calendar"></span>
                Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownFilter" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);">
                <li>
                    <h6 class="dropdown-header">Tampilkan Data</h6>
                </li>
                <li><a class="dropdown-item" href="#">Jul-2023</a></li>
                <li><a class="dropdown-item" href="#">Aug-2023</a></li>
                <li><a class="dropdown-item" href="#">Sep-2023</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Semua Data</a></li>
            </ul>
        </div>
    </div>
    <table class="table table-hover mt-5 align-middle">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Headline</th>
            <th>Prioritas</th>
            <th class="text-center">Opsi</th>
        </tr>
        <?php $no = 1;
        foreach ($info as $row) : ?>
            <tr class="align-middle">
                <td><?= $no ?></td>
                <td><?= $row['tgl_awal'] ?></td>
                <td><?= $row['tentang'] ?></td>
                <td>
                    <div class="form-check form-switch">
                        <input data-id="<?= $row['id'] ?>" class="form-check-input" type="checkbox" id="prioritas" <?= !$row['prioritas'] ?: 'checked' ?>>
                    </div>
                </td>
                <td class="text-end">
                    <a href="" data-id="<?= $row['id'] ?>" class="btn btn-sm btn-primary editInfo" data-bs-toggle="modal" data-bs-target="#modalForm"><span data-feather="edit"></span></a>
                    <form action="/data/info/<?= $row['id']; ?>" method="post" class="d-inline" id="delete-<?= $row['id'] ?>">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="delete">
                        <button type="button" class="btn btn-sm btn-danger delete-<?= $row['id'] ?>"><span data-feather="trash"></span></button>
                    </form>
                    <script>
                        $('.delete-<?= $row['id'] ?>').click(function() {
                            swal({
                                title: 'Anda yakin?',
                                text: "Data tidak bisa dikembalikan!",
                                type: 'warning',
                                showCancelButton: true,
                                confirmButtonClass: 'btn btn-success',
                                cancelButtonClass: 'btn btn-danger m-l-10',
                                confirmButtonText: 'Hapus!'
                            }).then(function() {
                                $('#delete-<?= $row['id'] ?>').submit();
                            })
                        });
                    </script>
                </td>
            </tr>
        <?php $no++;
        endforeach; ?>
    </table>
</main>

<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formLabel">Input Informasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/data/info" method="post">
                <div class="modal-body">
                    <div class='mb-2'>
                        <label class='form-label' for='tgl_awal'>Tanggal Awal</label>
                        <input type='text' class='form-control' name='tgl_awal' id='tgl_awal' required>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='tgl_ahir'>Tanggal Akhir</label>
                        <input type='text' class='form-control' name='tgl_ahir' id='tgl_ahir' required>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='bagian'>Informan</label>
                        <select type='text' class='form-select' name='bagian' id='bagian' required>
                            <option value=''>.. pilih ..</option>
                            <option>Yayasan Bugelan</option>
                            <option>Kepala Sekolah</option>
                            <option>Kurikulum</option>
                            <option>Kesiswaan</option>
                            <option>Wali Kelas 7</option>
                            <option>Wali Kelas 8</option>
                            <option>Wali Kelas 9</option>
                            <option>Guru</option>
                            <option>OSIS</option>
                        </select>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='tentang'>Headline</label>
                        <input type='text' class='form-control' name='tentang' id='tentang' required>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='detail'>Detail</label>
                        <textarea type='text' class='form-control' name='detail' id='detail' required></textarea>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='ket'>Keterangan</label>
                        <input type='text' class='form-control' name='ket' id='ket'>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="<?= base_url() ?>/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script>
    $('#tgl_awal').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });
    $('#tgl_ahir').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });
    // modal Edit view
    $('.editInfo').on('click', function() {
        const id = $(this).data('id');
        $('#formLabel').html('Edit Data <b>Informasi</b>');
        $('.modal-content form').attr('action', '/data/info/' + id);
        $.ajax({
            url: '/data/info/' + id,
            method: 'get',
            dataType: 'json',
            success: function(data) {
                console.log(data)
                $('#tgl_awal').val(data.info.tgl_awal);
                $('#tgl_ahir').val(data.info.tgl_ahir);
                $('#bagian').val(data.info.bagian);
                $('#tentang').val(data.info.tentang);
                $('#detail').val(data.info.detail);
                $('#ket').val(data.info.ket);
            }
        });
    });
    // modal Input view
    $('.inputInfo').on('click', function() {
        $('#formLabel').html('Input Data <b>Informasi</b>');
        $('.modal-body form').attr('action', '/data/info');
        $('#tgl_awal').val('');
        $('#tgl_ahir').val('');
        $('#bagian').val('');
        $('#tentang').val('');
        $('#detail').val('');
        $('#ket').html('');
    });
    // modal Prioritas
    $('#prioritas').on('click', function() {
        const id = $(this).data('id');
        $.ajax({
            url: '/data/info-prior/' + id,
            method: 'post',
            success: function(data) {
                console.log(data)
            }
        });
    });
</script>

<?php $this->endSection();  ?>