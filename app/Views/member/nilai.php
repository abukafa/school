<?php
$this->extend('template/admin');
$this->section('content');
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Penilaian</h1>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-4">
                    Nama
                </div>
                <div class="col-8">
                    : <?= $siswa['nama'] ?>
                </div>
                <div class="col-4">
                    Wali
                </div>
                <div class="col-8">
                    : <?= $siswa['nama_ayah'] ?>
                </div>
                <div class="col-4">
                    Kelas
                </div>
                <div class="col-8">
                    : <?= kelas($siswa['tahun']) ?>
                </div>
            </div>
        </div>
    </div>
    <h6 class="mt-5">1. Ulangan Semester 2 2022-2023</h6>
    <table class="table table-bordered mt-4 text-center">
        <tr>
            <th>No</th>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>1</td>
            <td class="text-start">Pendidikan Agama Islam</td>
            <td>75</td>
        </tr>
        <tr>
            <td>2</td>
            <td class="text-start">Bhs. Indonesia</td>
            <td>75</td>
        </tr>
        <tr>
            <td>3</td>
            <td class="text-start">Matematika</td>
            <td>75</td>
        </tr>
        <div class="tr">
            <th colspan="2">Rata-rata</th>
            <th>75</th>
        </div>
    </table>
    <div class="row text-center mt-4">
        <div class="col-md-6">
            <div class="card p-4">
                <h6>Persentasi Hasil Belajar</h6>
                <canvas id="nilai"></canvas>
                <p class="mt-3">Kamu bisa lebih baik dari ini, Berusaha lah untuk lebih giat & jangan berputus asa.. Jadilah dirimu yang terbaik..</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-4">
                <h6>Absensi</h6>
                <canvas id="absen"></canvas>
                <p class="mt-3">Salah satu kecerdasan yang sering kau abaikan adalah Managemen Waktu, mulailah untuk lebih disiplin..</p>
            </div>
        </div>
    </div>
</main>

<script src="<?= base_url() ?>/js/chart.min.js"></script>
<script>
    var cta = document.getElementById('nilai')
    var yourChart = new Chart(cta, {
        type: 'pie',
        data: {
            datasets: [{
                data: [80, 20],
                backgroundColor: ['#3ed48e', '#d4d43e']
            }]
        }
    });
    var cta = document.getElementById('absen')
    var yourChart = new Chart(cta, {
        type: 'pie',
        data: {
            datasets: [{
                data: [80, 20],
                backgroundColor: ['#3ed48e', '#d4d43e']
            }]
        }
    });
</script>

<?php $this->endSection();  ?>