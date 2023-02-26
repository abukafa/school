<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/profil', 'Home::profile');
$routes->get('/prakata', 'Home::foreword');
$routes->get('/program', 'Home::program');
$routes->get('/pengajar', 'Home::pengajar');
$routes->get('/info', 'Home::info');
$routes->get('/kalender', 'Home::kalender');
$routes->get('/jadwal', 'Home::Jadwal');
$routes->get('/absensi', 'Home::absensi');
$routes->get('/blog', 'Home::blog');
$routes->get('/blog/(:any)', 'Home::detail/$1');
$routes->get('/galeri', 'Home::galeri');
$routes->get('/siswa', 'Home::siswa');
$routes->get('/alumni', 'Home::alumni');

$routes->get('/admin', 'Login::admin');
$routes->get('/member', 'Login::member');
$routes->post('/admin', 'Login::loginAdmin');
$routes->post('/member', 'Login::loginMember');
$routes->get('/logout', 'Login::logout');

$routes->get('/dashboard', 'OfficeDashboard::index');
$routes->get('/admin/profil', 'OfficeDashboard::profil');
$routes->post('/admin/profil', 'OfficeDashboard::save');

$routes->get('/admin/member', 'OfficeMember::get');
$routes->get('/admin/member/(:num)', 'OfficeMember::get/$1');
$routes->get('/admin/guru', 'OfficeMember::guru');
$routes->get('/admin/guru/(:any)', 'OfficeMember::guru/$1');
$routes->get('/admin/siswa', 'OfficeMember::siswa');
$routes->get('/admin/siswa/(:num)', 'OfficeMember::siswa/$1');
$routes->get('/admin/biodata/(:num)', 'MemberBiodata::index/$1');
$routes->post('/admin/biodata', 'MemberBiodata::save');
$routes->post('/admin/biodata/(:num)', 'MemberBiodata::save/$1');
$routes->delete('/admin/biodata/(:num)', 'MemberBiodata::delete/$1');

$routes->get('/admin/kalender', 'OfficeKalender::index');
$routes->get('/admin/kalender/(:num)', 'OfficeKalender::get/$1');
$routes->post('/admin/kalender', 'OfficeKalender::save');
$routes->post('/admin/kalender/(:num)', 'OfficeKalender::save/$1');
$routes->delete('/admin/kalender/(:num)', 'OfficeKalender::delete/$1');
$routes->get('/admin/jadwal', 'OfficeKalender::jadwal');

$routes->get('/admin/laporan', 'OfficeLaporan::index');

$routes->get('/admin/pengguna', 'OfficeUser::index');
$routes->get('/admin/pengguna/(:num)', 'OfficeUser::get/$1');
$routes->post('/admin/pengguna/', 'OfficeUser::insert');
$routes->post('/admin/pengguna/(:num)', 'OfficeUser::update/$1');
$routes->delete('/admin/pengguna/(:num)', 'OfficeUser::delete/$1');
$routes->get('/password', 'OfficeUser::changePass');
$routes->post('/password/update', 'OfficeUser::updatePass');

$routes->get('/member/biodata/(:num)', 'MemberBiodata::index/$1');

$routes->get('/member/kompetensi', 'MemberKompetensi::index');

$routes->get('/member/nilai', 'MemberNilai::index');

$routes->get('/data/absensi', 'AdminAbsensi::index');

$routes->get('/data/blog', 'AdminBlog::index');

$routes->get('/data/galeri', 'AdminGaleri::index');

$routes->get('/data/info', 'AdminInfo::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
