<?php
$this->extend('template/admin');
$this->section('content');

flash_alert()
?>

<style>
    #file-tool {
        display: none;
    }
</style>

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/trix.css">
<script type="text/javascript" src="<?= base_url() ?>/js/trix.umd.min.js"></script>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Konten Detail</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <?php if ($blog) {
                    if ($blog['publish'] == false) { ?>
                        <a href="/data/publish/<?= $blog['id'] ?>" type="button" class="btn btn-sm btn-primary">Publish</a>
                    <?php } else { ?>
                        <a href="/blog/<?= $blog['id'] ?>" target="_blank" type="button" class="btn btn-sm btn-outline-secondary">Preview</a>
                <?php }
                } ?>
            </div>
        </div>
    </div>
    <form action="/data/blog/<?= ($blog) ? $blog['id'] : 0 ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class='form-label' id="kategori_label" for="kategori">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori" aria-label="Kategori" required>
                        <option><?= ($blog) ? $blog['kategori'] : '' ?></option>
                        <option>Profil</option>
                        <option>Pendidikan</option>
                        <option>Dunia Islam</option>
                        <option>Organisasi</option>
                        <option>Kesehatan</option>
                        <option>Teknologi</option>
                        <option>Sosial</option>
                        <option>Politik</option>
                        <option>Nasional</option>
                        <option>Wirausaha</option>
                        <option>Kuliner</option>
                        <option>Inspirasi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="autor" class="form-label">Penulis</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="autor" id="autor" value="<?= ($blog) ? $blog['autor'] : '' ?>" required>
                        <input type="hidden" class="form-control" name="idm" id="idm" value="<?= ($blog) ? $blog['idm'] : '' ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Blog</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="<?= ($blog) ? $blog['judul'] : '' ?>" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="image" id="image" onchange="previewImage(this)">
                        <?php if ($blog) { ?>
                            <div class="form-check form-switch pt-2 ms-3">
                                <input class="form-check-input" type="checkbox" id="galeri" <?= ($blog['galeri']) ? 'checked' : '' ?> onclick="saveToGaleri(<?= $blog['id'] ?>)">
                                <label class="form-check-label text-muted" for="galeri">Simpan di Galeri</label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="my-3">
                    <img id="image-preview" src="<?= ($blog) ? uploaded($blog['image'], '/img/galeri', 'default.jpg') : '' ?>" class="img-preview img-fluid w-100">
                </div>
            </div>
            <div class="col-12 mb-3">
                <label for="judul" class="form-label">Isi Blog</label>
                <input type="text" id="body" name="body" style="visibility: hidden;" required>
                <trix-editor input="body"><?= ($blog) ? $blog['body'] : '' ?></trix-editor>
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100 mb-5">Simpan</button>
    </form>
</main>

<script>
    $(document).on('trix-file-accept', function(event) {
        event.preventDefault();
    });

    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var preview = document.getElementById('image-preview');
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function saveToGaleri(id) {
        $.ajax({
            type: "post",
            url: "/data/save/" + id,
            dataType: "text",
            success: function(response) {
                console.log(response)
            },
            error: function(xhr, ajaxOption, thrownError) {
                console.error("AJAX error: " + xhr.status + "/n" + xhr.responseText + "/n" + thrownError);
            }
        });
    }
</script>

<?php $this->endSection();  ?>