<?php
$this->extend('template/main');
$this->section('content');
?>

<style>
    .bg-light-success {
        background-color: #3ed48e;
    }

    .bg-light-warning {
        background-color: #d4d43e;
    }
</style>

<div class="row g-5 mt-2 px-2">
    <div class="col">
        <article class="blog-post text-center">
            <h2 class="blog-post-title">Absensi Sekolah</h2>
            <p class="blog-post-meta mb-5"><?= date('l, d M Y') ?></p>
        </article>

        <div class="row">
            <div class="col-lg-4 mb-2 order-1 order-lg-1">
                <div class="card border-5">
                    <div class="card-header">
                        Kehadiran
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <h4 class="card-title">Kelas VII</h4>
                                <h6 class="card-text">15 Hadir</h6>
                            </div>
                            <div class="col-7">
                                <canvas id="absen7"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        2 absen
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-2 order-3 order-lg-2">
                <div class="card border-5">
                    <div class="card-header">
                        Kehadiran
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <h4 class="card-title">Kelas VIII</h4>
                                <h6 class="card-text">15 Hadir</h6>
                            </div>
                            <div class="col-7">
                                <canvas id="absen8"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        2 absen
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-2 order-5 order-lg-3">
                <div class="card border-5">
                    <div class="card-header">
                        Kehadiran
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <h4 class="card-title">Kelas IX</h4>
                                <h6 class="card-text">15 Hadir</h6>
                            </div>
                            <div class="col-7">
                                <canvas id="absen9"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        2 absen
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-2 order-2 order-lg-4">
                <table class="table">
                    <tr>
                        <td>7</td>
                        <td>Dimas Pangestu</td>
                        <td><span class="badge rounded-pill bg-dark float-end me-3">12:25</span></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Muhammad Abdul Mughni</td>
                        <td><span class="badge rounded-pill bg-danger float-end me-3">Alpa</span></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Ajeng Raras Kandita</td>
                        <td><span class="badge rounded-pill bg-warning float-end me-3">Izin</span></td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-4 mb-2 order-4 order-lg-5">
                <table class="table">
                    <tr>
                        <td>8</td>
                        <td>Piki Prasetyo</td>
                        <td><span class="badge rounded-pill bg-dark float-end me-3">10:25</span></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Adi Bayu</td>
                        <td><span class="badge rounded-pill bg-danger float-end me-3">Alpa</span></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Aneu Anggraeni</td>
                        <td><span class="badge rounded-pill bg-info float-end me-3">Sakit</span></td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-4 mb-2 order-last order-lg-6">
                <table class="table">
                    <tr>
                        <td>9</td>
                        <td>Rizki Nugraha</td>
                        <td><span class="badge rounded-pill bg-danger float-end me-3">Alpa</span></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Hirsa Nurasiyah</td>
                        <td><span class="badge rounded-pill bg-warning float-end me-3">Izin</span></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Hilda Khoirunnisa</td>
                        <td><span class="badge rounded-pill bg-info float-end me-3">Sakit</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>/js/chart.min.js"></script>
<script>
    var cta = document.getElementById('absen7')
    var yourChart = new Chart(cta, {
        type: 'pie',
        data: {
            datasets: [{
                data: [80, 20],
                backgroundColor: ['#3ed48e', '#d4d43e']
            }]
        }
    });
    var cta = document.getElementById('absen8')
    var yourChart = new Chart(cta, {
        type: 'pie',
        data: {
            datasets: [{
                data: [80, 20],
                backgroundColor: ['#3ed48e', '#d4d43e']
            }]
        }
    });
    var cta = document.getElementById('absen9')
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