<?php
$this->extend('template/admin');
$this->section('content');

flash_alert();
?>

<link href="<?= base_url() ?>/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kompetensi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary inputKomp" data-bs-toggle="modal" data-bs-target="#modalForm">Data Baru</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" id="dropdownFilter" data-bs-toggle="dropdown" aria-expanded="true">
                <span data-feather="calendar"></span>
                Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownFilter" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);">
                <li>
                    <h6 class="dropdown-header">Tampilkan Data</h6>
                </li>
                <li><a class="dropdown-item" href="#">Pendidikan</a></li>
                <li><a class="dropdown-item" href="#">Kompetensi</a></li>
                <li><a class="dropdown-item" href="#">Prestasi</a></li>
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
            <th class="d-none d-lg-table-cell">Jenis</th>
            <th>Tahun</th>
            <th>Institusi</th>
            <th class="d-none d-md-table-cell">Subjek</th>
            <th class="d-none d-lg-table-cell">Hasil</th>
            <th class="text-center">Opsi</th>
        </tr>
        <?php $no = 1;
        foreach ($kompetensi as $row) : ?>
            <tr>
                <td><?= $no ?></td>
                <td class="d-none d-lg-table-cell"><?= $row['jenis'] ?></td>
                <td><?= date_format(date_create($row['tgl_awal']), 'Y') ?></td>
                <td><?= $row['tempat'] ?></td>
                <td class="d-none d-md-table-cell"><?= $row['subjek'] ?></td>
                <td class="d-none d-lg-table-cell"><?= $row['hasil'] ?></td>
                <td class="text-end">
                    <a href="" data-id="<?= $row['id'] ?>" class="btn btn-sm btn-primary editKomp" data-bs-toggle="modal" data-bs-target="#modalForm"><span data-feather="edit"></span></a>
                    <form action="/member/kompetensi/<?= $row['id']; ?>" method="post" class="d-inline" id="delete-<?= $row['id'] ?>">
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
                <h5 class="modal-title" id="formLabel">Input Kompetensi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/member/kompetensi" method="post">
                <div class="modal-body">
                    <div class='mb-2'>
                        <label class='form-label' for='idm'>Nama</label>
                        <select type='text' class='form-select <?= !session()->get('member') ?: 'd-none' ?>' name='idm' id='idm'>
                            <option><?= $member['id'] ?></option>
                        </select>
                        <input type="text" class="form-control" name='nama' id='nama' value="<?= $member['nama'] ?>" readonly>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='jenis'>Jenis</label>
                        <select type='text' class='form-select' name='jenis' id='jenis'>
                            <option value=''>.. pilih ..</option>
                            <option>Pendidikan</option>
                            <option>Non Formal</option>
                            <option>Kompetensi</option>
                            <option>Prestasi</option>
                        </select>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='tempat'>Tempat</label>
                        <input type='text' class='form-control' name='tempat' id='tempat' placeholder="Institusi atau Penyelenggara..">
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='subjek'>Subjek</label>
                        <input type='text' class='form-control' name='subjek' id='subjek' placeholder="Jurusan atau Bagian yang diikuti..">
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='hasil'>Hasil</label>
                        <input type='text' class='form-control' name='hasil' id='hasil' placeholder="Nilai akhir atau Pencapaian..">
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='tgl_awal'>Tanggal Mulai</label>
                        <input type='text' class='form-control' name='tgl_awal' id='tgl_awal'>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='tgl_ahir'>Tanggal Selesai</label>
                        <input type='text' class='form-control' name='tgl_ahir' id='tgl_ahir'>
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
    $('.editKomp').on('click', function() {
        const id = $(this).data('id');
        $('#formLabel').html('Edit Data <b>Kompetensi</b>');
        $('.modal-content form').attr('action', '/member/kompetensi/' + id);
        $.ajax({
            url: '/member/kompetensi-get/' + id,
            method: 'get',
            dataType: 'json',
            success: function(data) {
                console.log(data)
                $('#idm').val(data.kompetensi.idm);
                $('#nama').val(data.kompetensi.nama);
                $('#jenis').val(data.kompetensi.jenis);
                $('#tempat').val(data.kompetensi.tempat);
                $('#subjek').val(data.kompetensi.subjek);
                $('#hasil').val(data.kompetensi.hasil);
                $('#tgl_awal').val(data.kompetensi.tgl_awal);
                $('#tgl_ahir').val(data.kompetensi.tgl_ahir);
                $('#ket').val(data.kompetensi.ket);
            }
        });
    });
    // modal Input view
    $('.inputKomp').on('click', function() {
        $('#formLabel').html('Input Data <b>Kompetensi</b>');
        $('.modal-body form').attr('action', '/member/kompetensi');
        $('#jenis').val('');
        $('#tempat').val('');
        $('#subjek').val('');
        $('#hasil').val('');
        $('#tgl_awal').val('');
        $('#tgl_ahir').val('');
        $('#ket').val('');
    });
</script>

<?php $this->endSection();  ?>