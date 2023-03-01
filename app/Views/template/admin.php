<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Administrator Website SMPT Bugelan">
    <meta name="author" content="Abu Kafa">
    <meta name="generator" content="Semangkamedia">
    <title><?= $title ?> | Administrator</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Sweet-Alert  -->
    <link href="<?= base_url() ?>/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <script src="<?= base_url() ?>/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <script src="<?= base_url() ?>/js/jquery.min.js"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 p-3" href="/">SMPT Bugelan</a>
        <a class="btn text-light text-center d-none d-md-block me-2"><?= session()->get('uname') ?></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed my-2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-4 ps-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link <?= $title <> 'Dashboard' ?: 'active' ?>" aria-current="page" href="/dashboard">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <div class="<?= (session()->get('akses') && session()->get('akses') == 'Office') ?: 'd-none' ?>">
                            <li class="nav-item">
                                <a class="nav-link <?= $title <> 'Profil' ?: 'active' ?>" href="/admin/profil">
                                    <span data-feather="file"></span>
                                    Profil Sekolah
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $title <> 'Guru' ?: 'active' ?>" href="/admin/guru">
                                    <span data-feather="user"></span>
                                    Guru & Pengurus
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $title <> 'Siswa' ?: 'active' ?>" href="/admin/siswa">
                                    <span data-feather="users"></span>
                                    Data Siswa
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $title <> 'Kalender' ?: 'active' ?>" href="/admin/kalender">
                                    <span data-feather="calendar"></span>
                                    Kalender
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $title <> 'Jadwal' ?: 'active' ?>" href="/admin/jadwal">
                                    <span data-feather="grid"></span>
                                    Jadwal Pelajaran
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $title <> 'Laporan' ?: 'active' ?>" href="/admin/laporan">
                                    <span data-feather="bar-chart-2"></span>
                                    Laporan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $title <> 'Pengguna' ?: 'active' ?>" href="/admin/pengguna">
                                    <span data-feather="layers"></span>
                                    Pengguna
                                </a>
                            </li>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link <?= $title <> 'Password' ?: 'active' ?>" href="/password">
                                <span data-feather="key"></span>
                                Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">
                                <span data-feather="log-out"></span>
                                Logout
                            </a>
                        </li>
                    </ul>

                    <div id="member" class="<?= (session()->get('member')) ?: 'd-none' ?>">
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 my-4 text-muted">
                            <span>Member</span>
                            <span data-feather="sun"></span>
                        </h6>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link <?= $title <> 'Biodata' ?: 'active' ?>" href="/member/biodata/<?= session()->get('id') ?>">
                                    <span data-feather="database"></span>
                                    Biodata
                                </a>
                            </li>
                            <li class="nav-item <?= (!is_numeric(session()->get('member')) || session()->get('member') < tahun(9)) ?: 'd-none' ?>">
                                <a class="nav-link <?= $title <> 'Kompetensi' ?: 'active' ?>" href="/member/kompetensi/<?= session()->get('id') ?>">
                                    <span data-feather="award"></span>
                                    Kompetensi
                                </a>
                            </li>
                            <li class="nav-item <?= (session()->get('member') > tahun(10)) ?: 'd-none' ?>">
                                <a class="nav-link <?= $title <> 'Nilai' ?: 'active' ?>" href="/member/nilai/<?= session()->get('id') ?>">
                                    <span data-feather="check-square"></span>
                                    Nilai
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div id="admin" class="<?= (session()->get('akses')) ?: 'd-none' ?>">
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 my-4 text-muted">
                            <span>Administrator</span>
                            <span data-feather="coffee"></span>
                        </h6>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link <?= $title <> 'Absensi' ?: 'active' ?>" href="/data/absensi">
                                    <span data-feather="activity"></span>
                                    Absensi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $title <> 'Blog' ?: 'active' ?>" href="/data/blog">
                                    <span data-feather="align-right"></span>
                                    Blog
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $title <> 'Galeri' ?: 'active' ?>" href="/data/galeri">
                                    <span data-feather="image"></span>
                                    Galeri
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $title <> 'Info' ?: 'active' ?>" href="/data/info">
                                    <span data-feather="info"></span>
                                    Informasi
                                </a>
                            </li>
                        </ul>
                    </div>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 my-4 text-muted d-md-none">
                        <span><?= session()->get('uname') ?></span>
                        <span data-feather="user"></span>
                    </h6>
                </div>
            </nav>

            <div class="container">
                <?php $this->renderSection('content'); ?>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/js/feather.min.js"></script>
    <script>
        feather.replace({
            'aria-hidden': 'true'
        })
    </script>
</body>

</html>