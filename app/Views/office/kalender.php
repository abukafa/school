<?php
$this->extend('template/admin');
$this->section('content');

flash_alert();
?>

<link href="<?= base_url() ?>/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kalender Pendidikan</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary inputKalender" data-bs-toggle="modal" data-bs-target="#modalForm">Data Baru</button>
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
            <th class="d-none d-lg-table-cell">Tgl Awal</th>
            <th class="d-none d-lg-table-cell">Tgl Ahir</th>
            <th>Display</th>
            <th>Keterangan</th>
            <th class="d-none d-lg-table-cell">Warna</th>
            <th class="text-center">Opsi</th>
        </tr>
        <?php $no = 1;
        foreach ($acara as $row) : ?>
            <tr>
                <td><?= $no ?></td>
                <td class="d-none d-lg-table-cell"><?= $row['tgl_awal'] ?></td>
                <td class="d-none d-lg-table-cell"><?= $row['tgl_ahir'] ?></td>
                <td><?= $row['acara'] ?></td>
                <td><?= $row['ket'] ?></td>
                <td class="d-none d-lg-table-cell"><?= $row['warna'] ?></td>
                <td class="text-end">
                    <a data-id="<?= $row['id'] ?>" class="btn btn-sm btn-primary editKalender" data-bs-toggle="modal" data-bs-target="#modalForm"><span data-feather="edit"></span></a>
                    <form action="/admin/kalender/<?= $row['id']; ?>" method="post" class="d-inline" id="delete-<?= $row['id'] ?>">
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
                <h5 class="modal-title" id="formLabel">Input Kalender</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/admin/kalender" method="post">
                <div class="modal-body">
                    <div class='mb-2'>
                        <label class='form-label' for='jenis'>Jenis Acara</label>
                        <div class="input-group">
                            <select class="form-select" name="jenis" id="jenis" required>
                                <option value="">.. pilih ..</option>
                                <option>Libur Sekolah</option>
                                <option>Penilaian Semester</option>
                                <option>Ulangan & Assesment</option>
                                <option>Review Pembelajaran</option>
                                <option>Outing Class</option>
                                <option>Perlombaan</option>
                                <option>Program OSIS</option>
                            </select>
                            <input type='text' class='form-control' name='warna' id='warna' readonly>
                        </div>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='tgl_awal'>Tanggal Awal</label>
                        <input type='text' class='form-control' name='tgl_awal' id='tgl_awal' required>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='tgl_ahir'>Tanggal Akhir</label>
                        <input type='text' class='form-control' name='tgl_ahir' id='tgl_ahir' required>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='acara'>Display</label>
                        <input type='text' class='form-control' name='acara' id='acara' required>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='ket'>Penjelasan</label>
                        <input type='text' class='form-control' name='ket' id='ket' required>
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
<script type="text/javascript">
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
    $('#jenis').on('change', function() {
        switch (this.value) {
            case 'Libur Sekolah':
                $('#warna').val('red');
                break;
            case 'Penilaian Semester':
                $('#warna').val('blue');
                break;
            case 'Ulangan & Assesment':
                $('#warna').val('pink');
                break;
            case 'Review Pembelajaran':
                $('#warna').val('grey');
                break;
            case 'Outing Class':
                $('#warna').val('orange');
                break;
            case 'Perlombaan':
                $('#warna').val('yellow');
                break;
            case 'Program OSIS':
                $('#warna').val('purple');
                break;
            default:
                $('#warna').val('green');
                break;
        }
    });
    $('.editKalender').on('click', function() {
        const id = $(this).data('id');
        $('#formLabel').html('Edit Data <b>Kalender</b>');
        $('.modal-content form').attr('action', '/admin/kalender/' + id);
        $.ajax({
            url: '/admin/kalender/' + id,
            data: {
                id: id
            },
            method: 'get',
            dataType: 'json',
            success: function(data) {
                $('#warna').val(data.kalender.warna);
                $('#tgl_awal').val(data.kalender.tgl_awal);
                $('#tgl_ahir').val(data.kalender.tgl_ahir);
                $('#acara').val(data.kalender.acara);
                $('#ket').val(data.kalender.ket);
            }
        });
    });
    $('.inputKalender').on('click', function() {
        $('#formLabel').html('Input Data <b>Kalender</b>');
        $('.modal-body form').attr('action', '/admin/kalender');
        $('#warna').val('');
        $('#tgl_awal').val('');
        $('#tgl_ahir').val('');
        $('#acara').val('');
        $('#ket').val('');
    });
</script>

<?php $this->endSection();  ?>