<?php
$this->extend('template/admin');
$this->section('content');

flash_alert();
?>

<link href="<?= base_url() ?>/plugins/croppie/croppie.css" rel="stylesheet" />
<link href="<?= base_url() ?>/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url() ?>/plugins/virtual-select/virtual-select.min.css" />
<script src="<?= base_url() ?>/plugins/virtual-select/virtual-select.min.js"></script>

<style>
    #label-virtual-select {
        display: block;
        margin-bottom: 10px;
    }

    #virtual-select {
        max-width: 100%;
        /* width: 500px; */
    }
</style>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Biodata</h1>
    </div>
    <form action="" method="post">
        <div class="row my-5">
            <div id="uploaded_image" class="col text-center">
                <img src="<?= uploaded(($member) ? $member['id'] . '.png' : '', '/img/profile') ?>" class="rounded-circle mb-2" id="imgPreview" width="200" height="200" />
            </div>
            <input type='file' class='form-control d-none p-1' name='upload_image' id='upload_image' accept='.jpg'>
        </div>
    </form>
    <form action="<?= (!$member) ? '/admin/biodata' : ((session()->get('member')) ? '/member/biodata/' : '/admin/biodata/') . $member['id'] ?>" method="post">
        <div class="row mb-5">
            <div class="<?= (session()->get('member')) ? 'd-none' : ''  ?>">
                <div class="row">
                    <div class='col-md-6 mb-2'>
                        <label class='form-label' for='akun'>Jenis Akun</label>
                        <select type='text' class='form-select' name='akun' id='akun'>
                            <option><?= ($member) ? $member['akun'] : '' ?></option>
                            <option>Guru</option>
                            <option>Staff</option>
                            <option>Pengurus</option>
                            <option>Siswa</option>
                        </select>
                    </div>
                    <div class='col-md-6 mb-2'>
                        <label class='form-label' for='pass'>Passcode</label>
                        <div class="input-group">
                            <input type='text' class='form-control' name='id' id='id' value="<?= ($member) ? $member['id'] : '' ?>" readonly>
                            <input type='text' class='form-control' name='pass' id='pass' value="<?= ($member) ? $member['pass'] : '' ?>">
                        </div>
                    </div>
                </div>
                <div class='col-md-12 mb-2'>
                    <label id="label-virtual-select" for='ket'>Keterangan</label>
                    <select multiple name="ket" id="virtual-select" placeholder="<?= ($member) ? $member['ket'] : '' ?>" data-search="false" data-silent-initial-value-set="true">
                        <option>Kepala Sekolah</option>
                        <option>Sekretaris</option>
                        <option>Bendahara</option>
                        <option>Kurikulum</option>
                        <option>Kesiswaan</option>
                        <option>Wali Kelas 7</option>
                        <option>Wali Kelas 8</option>
                        <option>Wali Kelas 9</option>
                        <option>PAI</option>
                        <option>PKN</option>
                        <option>Bhs. Indo</option>
                        <option>Matematika</option>
                        <option>IPA</option>
                        <option>IPS</option>
                        <option>Seni Budaya</option>
                        <option>Bhs. Inggris</option>
                        <option>Bhs. Sunda</option>
                        <option>PJOK</option>
                        <option>TIK</option>
                    </select>
                </div>
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='ni'>Nomor Induk Siswa</label>
                <input type='text' class='form-control' name='ni' id='ni' value="<?= ($member) ? $member['ni'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='tahun'>Tahun Masuk</label>
                <input type='text' class='form-control' name='tahun' id='tahun' value="<?= ($member) ? $member['tahun'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='nama'>Nama Lengkap</label>
                <input type='text' class='form-control' name='nama' id='nama' value="<?= ($member) ? $member['nama'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='panggil'>Panggilan</label>
                <input type='text' class='form-control' name='panggil' id='panggil' value="<?= ($member) ? $member['panggil'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for=''>Jenis Kelamin</label>
                <select type='text' class='form-select' name='jk' id='jk' value="<?= ($member) ? $member['jk'] : '' ?>">
                    <option value=''>.. pilih ..</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='tempat_lahir'>Tempat Tanggal Lahir</label>
                <div class="input-group">
                    <input type='text' class='form-control' name='tempat_lahir' id='tempat_lahir' value="<?= ($member) ? $member['tempat_lahir'] : '' ?>">
                    <input type='text' class='form-control' name='tanggal_lahir' id='tanggal_lahir' value="<?= ($member) ? $member['tanggal_lahir'] : '' ?>">
                </div>
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='nik'>NIK</label>
                <input type='text' class='form-control' name='nik' id='nik' value="<?= ($member) ? $member['nik'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='no_kk'>No. KK</label>
                <input type='text' class='form-control' name='no_kk' id='no_kk' value="<?= ($member) ? $member['no_kk'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='alamat'>Alamat</label>
                <input type='text' class='form-control' name='alamat' id='alamat' value="<?= ($member) ? $member['alamat'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='rt'>RT-RW</label>
                <div class="input-group">
                    <input type='text' class='form-control' name='rt' id='rt' value="<?= ($member) ? $member['rt'] : '' ?>">
                    <input type='text' class='form-control' name='rw' id='rw' value="<?= ($member) ? $member['rw'] : '' ?>">
                </div>
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='kelurahan'>Desa/ Kelurahan</label>
                <input type='text' class='form-control' name='kelurahan' id='kelurahan' value="<?= ($member) ? $member['kelurahan'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='kecamatan'>Kecamatan</label>
                <div class="input-group">
                    <input type='text' class='form-control' name='kecamatan' id='kecamatan' value="<?= ($member) ? $member['kecamatan'] : '' ?>">
                </div>
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='kode_pos'>Kode Pos</label>
                <input type='text' class='form-control' name='kode_pos' id='kode_pos' value="<?= ($member) ? $member['kode_pos'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='kabupaten'>Kabupaten</label>
                <input type='text' class='form-control' name='kabupaten' id='kabupaten' value="<?= ($member) ? $member['kabupaten'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='telepon'>Telepon</label>
                <input type='text' class='form-control' name='telepon' id='telepon' value="<?= ($member) ? $member['telepon'] : '' ?>">
            </div>
            <div class='col-md-6 mb-2'>
                <label class='form-label' for='email'>E-mail</label>
                <input type='text' class='form-control' name='email' id='email' value="<?= ($member) ? $member['email'] : '' ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class="form-label" for="nama_ayah"><b>Nama Ayah</b></label>
                <input type="text" class="form-control" name="nama_ayah" value="<?= ($member) ? $member['nama_ayah'] : '' ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class="form-label">Tgl Lahir Ayah</label>
                <input type="text" class="form-control" name="tl_ayah" id="tl_ayah" value="<?= ($member) ? $member['tl_ayah'] : '' ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan_ayah" value="<?= ($member) ? $member['pekerjaan_ayah'] : '' ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class="form-label"><b>Nama Ibu</b></label>
                <input type="text" class="form-control" name="nama_ibu" value="<?= ($member) ? $member['nama_ibu'] : '' ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class="form-label">Tgl Lahir Ibu</label>
                <input type="text" class="form-control" name="tl_ibu" id="tl_ibu" value="<?= ($member) ? $member['tl_ibu'] : '' ?>">
            </div>
            <div class="col-md-6 mb-2">
                <label class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan_ibu" value="<?= ($member) ? $member['pekerjaan_ibu'] : '' ?>">
            </div>
            <div class='col-12 mb-2'>
                <label class='form-label' for='arsip'>Arsip</label>
                <input type='file' class='form-control' name='arsip' id='arsip' accept='.pdf' value="<?= ($member) ? $member['arsip'] : '' ?>">
            </div>
            <div class="<?= (session()->get('member') > (date('Y') - 3)) ? 'd-none' : ''  ?>">
                <div class='col-12 mb-2'>
                    <label class='form-label' for='kesan'>Kesan</label>
                    <textarea type='text' class='form-control' name='kesan' id='kesan'><?= ($member) ? $member['kesan'] : '' ?></textarea>
                </div>
                <div class='col-12 mb-2'>
                    <label class='form-label' for='pesan'>Pesan</label>
                    <textarea type='text' class='form-control' name='pesan' id='pesan'><?= ($member) ? $member['pesan'] : '' ?></textarea>
                </div>
            </div>
            <div class="col mt-4">
                <button type="submit" class="btn btn-primary w-100" name="save">Simpan</button>
            </div>
        </div>
    </form>
</main>

<div class="modal fade" id="uploadimageModal" tabindex="-1" aria-labelledby="ModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Upload & Crop Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col text-center">
                        <div id="image_demo" style="width:350px; margin-top:30px"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary crop_image">Crop & Upload Image</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>/plugins/croppie/croppie.js"></script>
<script src="<?= base_url() ?>/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $('#tanggal_lahir').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });
    $('#tl_ayah').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });
    $('#tl_ibu').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });

    $('#uploaded_image').css('cursor', 'pointer');
    $('#uploaded_image').click(function() {
        $('#upload_image').trigger('click')
    });

    $(document).ready(function() {

        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'square' //circle
            },
            boundary: {
                width: 300,
                height: 300
            }
        });

        $('#upload_image').on('change', function() {
            var reader = new FileReader();
            reader.onload = function(event) {
                $image_crop.croppie('bind', {
                    url: event.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#uploadimageModal').modal('show');
        });

        $('.crop_image').click(function(event) {
            var id = $('#id').val();
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response) {
                $.ajax({
                    url: "/plugins/croppie/upload.php?id=" + id,
                    type: "POST",
                    data: {
                        "image": response
                    },
                    success: function(data) {
                        $('#uploadimageModal').modal('hide');
                        $('#uploaded_image').html(data);
                        console.log(data);
                    }
                });
            })
        });
    });

    VirtualSelect.init({
        ele: '#virtual-select'
    });
</script>

<?php $this->endSection();  ?>