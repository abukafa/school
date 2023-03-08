<?php
$this->extend('template/admin');
$this->section('content');

flash_alert();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Admin Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0 d-none">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-9">
            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
        </div>
        <div class="col-md-3 col-6">
            <canvas class="my-4 w-100" id="myDonat" width="300" height="420"></canvas>
        </div>
    </div>

    <h4 class="my-5">Penilaian</h4>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Penilaian</th>
                    <th scope="col">Pooling Pertanyaan</th>
                    <th scope="col">Semakin Baik</th>
                    <th scope="col">Cukup Baik</th>
                    <th scope="col">Biasa saja</th>
                    <th scope="col">Kurang Baik</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($pooling as $item) : ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $item['jenis'] ?></td>
                        <td><?= $item['pertanyaan'] ?></td>
                        <td><?= $item['a'] ?></td>
                        <td><?= $item['b'] ?></td>
                        <td><?= $item['c'] ?></td>
                        <td><?= $item['d'] ?></td>
                    </tr>
                <?php $no++;
                endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<script src="<?= base_url() ?>/js/chart.min.js"></script>
<script>
    /* globals Chart:false, feather:false */
    const pooling = <?= json_encode($pooling) ?>;
    const siA = parseInt(pooling[0].a) + parseInt(pooling[1].a) + parseInt(pooling[2].a);
    const guA = pooling[3].a;
    const kbA = pooling[4].a;
    const seA = pooling[5].a;
    const siB = parseInt(pooling[0].b) + parseInt(pooling[1].b) + parseInt(pooling[2].b);
    const guB = pooling[3].b;
    const kbB = pooling[4].b;
    const seB = pooling[5].b;
    const siC = parseInt(pooling[0].c) + parseInt(pooling[1].c) + parseInt(pooling[2].c);
    const guC = pooling[3].c;
    const kbC = pooling[4].c;
    const seC = pooling[5].c;
    const siD = parseInt(pooling[0].d) + parseInt(pooling[1].d) + parseInt(pooling[2].d);
    const guD = pooling[3].d;
    const kbD = pooling[4].d;
    const seD = pooling[5].d;
    (function() {
        'use strict'
        // Graphs
        var ctx = document.getElementById('myChart')
        // eslint-disable-next-line no-unused-vars
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    'Siswa',
                    'Guru',
                    'KBM',
                    'Sekolah',
                ],
                datasets: [{
                        label: 'Semakin Baik',
                        data: [
                            siA,
                            guA,
                            kbA,
                            seA,
                        ],
                        lineTension: 0,
                        backgroundColor: '#007bff',
                        borderColor: '#007bff',
                        borderWidth: 4,
                        pointBackgroundColor: '#007bff'
                    },
                    {
                        label: 'Cukup Baik',
                        data: [
                            siB,
                            guB,
                            kbB,
                            seB,
                        ],
                        lineTension: 0,
                        backgroundColor: '#20c997',
                        borderColor: '#20c997',
                        borderWidth: 4,
                        pointBackgroundColor: '#20c997'
                    },
                    {
                        label: 'Biasa saja',
                        data: [
                            siC,
                            guC,
                            kbC,
                            seC,
                        ],
                        lineTension: 0,
                        backgroundColor: '#ffcd39',
                        borderColor: '#ffcd39',
                        borderWidth: 4,
                        pointBackgroundColor: '#ffcd39'
                    },
                    {
                        label: 'Kurang Baik',
                        data: [
                            siD,
                            guD,
                            kbD,
                            seD,
                        ],
                        lineTension: 0,
                        backgroundColor: '#dc3545',
                        borderColor: '#dc3545',
                        borderWidth: 4,
                        pointBackgroundColor: '#dc3545'
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                legend: {
                    display: false
                }
            }
        })
    })()
    var cta = document.getElementById('myDonat')
    var yourChart = new Chart(cta, {
        type: 'pie',
        data: {
            labels: [
                'Sikap',
                'Kecerdasan',
                'Keterampilan',
            ],
            datasets: [{
                    data: [60, 20, 13],
                    backgroundColor: ['#20c997', '#ffcd39', '#dd3545']
                },
                {
                    data: [12, 50, 20],
                    backgroundColor: ['#20c997', '#ffcd39', '#dd3545']
                },
                {
                    data: [60, 24, 20],
                    backgroundColor: ['#20c997', '#ffcd39', '#dd3545']
                },
                {
                    data: [60, 24, 20],
                    backgroundColor: ['#20c997', '#ffcd39', '#dd3545']
                }
            ]
        }
    });
</script>

<?php $this->endSection();  ?>