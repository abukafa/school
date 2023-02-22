<?php
$this->extend('template/admin');
$this->section('content');

flash_alert();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Password</h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form action="/password/update" method="post">
                <div class='mb-2'>
                    <label class='form-label' for='user'>Username</label>
                    <input type='text' class='form-control' name='user' id='user' value="<?= session()->get('uname') ?>" readonly>
                </div>
                <div class='mb-2'>
                    <label class='form-label' for='lama'>Password Lama</label>
                    <input type='password' class='form-control' name='lama' id='lama'>
                </div>
                <div class='mb-2'>
                    <label class='form-label' for='baru'>Password Baru</label>
                    <input type='password' class='form-control' name='baru' id='baru'>
                </div>
                <div class='mb-2'>
                    <input type='password' class='form-control' name='lagi' id='lagi'>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php $this->endSection();  ?>