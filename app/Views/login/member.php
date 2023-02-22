<?php
$this->extend('template/main');
$this->section('content');
?>

<style>
    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }
</style>

<div class="row g-5 mt-2 ps-2">
    <div class="col text-center">
        <main class="form-signin">
            <form action="/member" method="post">
                <img class="mb-2 rounded-circle" src="<?= base_url() ?>/img/profile/no.png" alt="" width="75" height="75">
                <h1 class="h3 mb-5 fw-normal text-success">Login<br><strong>Member</strong></h1>

                <div class="alert alert-warning text-center <?= (session()->getFlashdata('error')) ?: 'd-none' ?>" role="alert">
                    <strong>Warning! </strong> <?= (session()->getFlashdata('error')) ?: '' ?>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" name="uname" placeholder="No. Induk">
                    <label for="floatingInput">No. Induk</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox my-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
            </form>
        </main>
    </div>
</div>

<?php $this->endSection();  ?>