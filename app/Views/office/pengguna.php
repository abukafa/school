<?php
$this->extend('template/admin');
$this->section('content');

flash_alert();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pengguna</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary inputPengguna" data-bs-toggle="modal" data-bs-target="#modalForm">Data Baru</button>
            </div>
        </div>
    </div>
    <table class="table table-hover mt-5 align-middle">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th class="d-none d-md-table-cell">Nama</th>
            <th>Tipe</th>
            <th class="d-none d-xl-table-cell">Akses</th>
            <th class="text-center">Opsi</th>
        </tr>
        <?php $no = 1;
        foreach ($user as $row) :
            if ($row['idm'] <> session()->get('idm')) {
        ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['uname'] ?></td>
                    <td class="d-none d-md-table-cell"><?= $row['nama'] ?></td>
                    <td><?= $row['tipe'] ?></td>
                    <td class="d-none d-xl-table-cell"><?= $row['akses'] ?></td>
                    <td class="text-end">
                        <a data-id="<?= $row['id'] ?>" class="btn btn-sm btn-primary editPengguna" data-bs-toggle="modal" data-bs-target="#modalForm"><span data-feather="edit"></span></a>
                        <form action="/admin/pengguna/<?= $row['id']; ?>" method="post" class="d-inline" id="delete-<?= $row['id'] ?>">
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
            }
        endforeach; ?>
    </table>
</main>

<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formLabel">Input Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/admin/pengguna" method="post">
                <div class="modal-body">
                    <div class='mb-2'>
                        <label class='form-label' for='uname'>Username</label>
                        <input type='text' class='form-control' name='uname' id='uname'>
                    </div>
                    <div class='mb-2 pass'>
                        <label class='form-label' for='pass'>Password</label>
                        <input type='text' class='form-control' name='pass' id='pass' value="adminbugelan" readonly>
                    </div>
                    <div class="mb-2">
                        <label id="idm_label" for="idm">Nama</label>
                        <select id="idm" name="idm" class="form-control form-select" aria-label="Nama">
                            <option>.. pilih ..</option>
                        </select>
                        <input type="text" class="form-control" id="nama" name="nama" readonly>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='tipe'>Tipe Akun</label>
                        <select type='text' class='form-select' name='tipe' id='tipe'>
                            <option value=''>.. pilih ..</option>
                            <option>Manager</option>
                            <option>Officer</option>
                            <option>Administrator</option>
                        </select>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='akses'>Akses Akun</label>
                        <input type='text' class='form-control' name='akses' id='akses'>
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

<script>
    // modal Edit view
    $('.editPengguna').on('click', function() {
        const id = $(this).data('id');
        $('#formLabel').html('Edit Data <b>Pengguna</b>');
        $('.modal-content form').attr('action', '/admin/pengguna/' + id);
        $.ajax({
            url: '/admin/pengguna/' + id,
            data: {
                id: id
            },
            method: 'get',
            dataType: 'json',
            success: function(data) {
                $('#uname').val(data.user.uname);
                $('#pass').attr('type', 'password');
                $('#idm').attr('class', 'form-select d-none');
                $('#nama').attr('type', 'text');
                $('#nama').val(data.user.nama);
                $('#tipe').val(data.user.tipe);
                $('#akses').val(data.user.akses);
                $('#ket').val(data.user.ket);
            }
        });
    });
    // modal Input view
    $('.inputPengguna').on('click', function() {
        $('#formLabel').html('Input Data <b>Pengguna</b>');
        $('.modal-body form').attr('action', '/admin/pengguna');
        $('#uname').val('');
        $('#pass').attr('type', 'text');
        $('#idm').attr('class', 'form-select');
        $('#nama').attr('type', 'hidden');
        $('#tipe').val('');
        $('#akses').val('');
        $('#ket').val('');
    });
    // selector id member
    $(function() {
        $.ajax({
            url: '/admin/member',
            method: 'get',
            dataType: 'json',
            success: function(data) {
                $.each(data.member, function(key, value) {
                    $('#idm').append('<option value="' + value.id + '">' + value.nama + '</option>');
                });
            }
        });
    });
    // select nama member
    $(document).ready(function() {
        $("#idm").change(function() {
            var id = $(this).val();
            $.ajax({
                url: '/admin/member/' + id,
                type: 'get',
                dataType: 'json',
                success: function(data) {
                    $("#nama").val(data.member.nama);
                }
            });
        });
    });
</script>

<?php $this->endSection();  ?>