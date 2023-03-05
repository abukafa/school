<?php
$this->extend('template/admin');
$this->section('content');
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Absensi</h1>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" id="dropdownFilter" data-bs-toggle="dropdown" aria-expanded="true">
            <span data-feather="calendar"></span>
            Filter
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownFilter" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);">
            <li>
                <h6 class="dropdown-header">Tampilkan Data</h6>
            </li>
            <li><a class="dropdown-item" href="/data/absensi/<?= tahun(7) ?>">Kelas VII</a></li>
            <li><a class="dropdown-item" href="/data/absensi/<?= tahun(8) ?>">Kelas VIII</a></li>
            <li><a class="dropdown-item" href="/data/absensi/<?= tahun(9) ?>">Kelas IX</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/data/absensi">Semua Data</a></li>
        </ul>
    </div>
    <h4 class="my-3 text-center">Kelas <?= tahun($member[0]['tahun']) ?></h4>
    <table class="table table-bordered table-hover text-center align-middle">
        <tr class="bg-light">
            <th rowspan="2">Nama</th>
            <th colspan="5">Kehadiran</th>
            <th rowspan="2">Ket</th>
        </tr>
        <tr class="bg-light">
            <th>Dh</th>
            <th>08</th>
            <th>10</th>
            <th>Dz</th>
            <th>13</th>
        </tr>
        <?php $no = 1;
        foreach ($member as $row) :
            $abs = [];
            foreach ($absensi as $value) {
                if ($value['idm'] == $row['id']) {
                    $abs = $value;
                    break;
                }
            }
        ?>
            <tr>
                <td class="text-start"><?= $no . '. ' . $row['panggil'] ?></td>
                <td>
                    <input type="checkbox" class="form-check-input" id="h1-<?= $row['id'] ?>" onclick="ceklis('jam1', <?= $row['id'] ?>)" <?= (!$abs) ?: ((!$abs['jam1']) ?: 'checked') ?>>
                </td>
                <td>
                    <input type="checkbox" class="form-check-input" id="h2-<?= $row['id'] ?>" onclick="ceklis('jam2', <?= $row['id'] ?>)" <?= (!$abs) ?: ((!$abs['jam2']) ?: 'checked') ?>>
                </td>
                <td>
                    <input type="checkbox" class="form-check-input" id="h3-<?= $row['id'] ?>" onclick="ceklis('jam3', <?= $row['id'] ?>)" <?= (!$abs) ?: ((!$abs['jam3']) ?: 'checked') ?>>
                </td>
                <td>
                    <input type="checkbox" class="form-check-input" id="h4-<?= $row['id'] ?>" onclick="ceklis('jam4', <?= $row['id'] ?>)" <?= (!$abs) ?: ((!$abs['jam4']) ?: 'checked') ?>>
                </td>
                <td>
                    <input type="checkbox" class="form-check-input" id="h5-<?= $row['id'] ?>" onclick="ceklis('jam5', <?= $row['id'] ?>)" <?= (!$abs) ?: ((!$abs['jam5']) ?: 'checked') ?>>
                </td>
                <td>
                    <a href="" class="open-modal" data-bs-toggle="modal" data-bs-target="#modalAbsen" data-idm="<?= $row['id'] ?>" data-nama="<?= $row['nama'] ?>">
                        <?php if (!$abs) { ?>
                            <span class="badge rounded-pill bg-light">!</span>
                            <?php } else {
                            if ($abs['absen'] == 's') { ?>
                                <span class="badge rounded-pill bg-info">s</span>
                            <?php } else if ($abs['absen'] == 'i') { ?>
                                <span class="badge rounded-pill bg-warning">i</span>
                            <?php } else if ($abs['absen'] == 'a') { ?>
                                <span class="badge rounded-pill bg-danger">a</span>
                            <?php } else { ?>
                                <span class="badge rounded-pill bg-light">!</span>
                        <?php }
                        } ?>
                    </a>
                </td>
            </tr>
        <?php $no++;
        endforeach; ?>
    </table>
</main>

<div class="modal fade" id="modalAbsen" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Absen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class='mb-2'>
                        <label class='form-label' for='nama'>Nama</label>
                        <input type='text' class='form-control d-none' name='member-id' id='member-id' value="">
                        <input type='text' class='form-control' name='nama' id='nama' value="" readonly>
                    </div>
                    <div class='mb-2'>
                        <label class='form-label' for='absen'>Keterangan</label>
                        <div class="input-group">
                            <select type='text' class='form-select' name='absen' id='absen' required>
                                <option value=''>.. pilih ..</option>
                                <option value='s'>Sakit</option>
                                <option value='i'>Izin</option>
                                <option value='a'>Alpa</option>
                            </select>
                            <input type="text" class="form-control" id="ket">
                        </div>
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
    function ceklis(jam, id) {
        $.ajax({
            url: '/data/ceklis/' + jam + '/' + id,
            dataType: "json",
            success: function(response) {
                console.log(response);
                if (response == 'baru') {
                    $('#h2-' + id).prop('checked', true);
                    $('#h3-' + id).prop('checked', true);
                    $('#h4-' + id).prop('checked', true);
                    $('#h5-' + id).prop('checked', true);
                } else if (response == true) {
                    $('a[data-idm=' + id + '] span').attr('class', 'badge rounded-pill bg-light');
                } else {
                    console.log("Unexpected response: " + response);
                }
            },
            error: function(xhr, ajaxOption, thrownError) {
                console.error("AJAX error: " + xhr.status + "/n" + xhr.responseText + "/n" + thrownError);
            }
        });
    }

    // Date Function
    function current_date() {
        const currentDate = new Date();
        const year = currentDate.getFullYear();
        const month = String(currentDate.getMonth() + 1).padStart(2, '0');
        const day = String(currentDate.getDate()).padStart(2, '0');
        const formattedDate = `${year}-${month}-${day}`;
        return formattedDate;
    }

    $(document).on("click", ".open-modal", function() {
        const tgl = current_date();
        const idm = $(this).data('idm');
        const nama = $(this).data('nama');
        $("#member-id").val(idm);
        $("#nama").val(nama);
        $('.modal-content form').attr('action', '/data/absen/' + idm);
    });

    $('#absen').on('change', function() {
        $('#ket').focus()
    });
</script>

<?php $this->endSection();  ?>