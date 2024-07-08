<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


// Admin //

$routes->get('dashboards', 'AppController::dashboards');
$routes->get('template', 'AppController::template');
$routes->get('dashboards', 'AppController::dashboards');

$routes->get("home","AppController::home");
$routes->get("sejarah","AppController::sejarah");
$routes->get("struktur_desa","AppController::struktur_desa");
$routes->get("rtrw","AppController::rtrw");
$routes->get("visimisi","AppController::visimisi");

;

// struktur
$routes->post("proses_tambah_struktur","AppController::proses_tambah_struktur");

$routes->post("proses_edit_struktur_desa", "AppController::proses_edit_struktur_desa");

$routes->get("struktur/(:num)/hapus","AppController::hapus_struktur/$1");

$routes->get("struktur/(:any)/edit", "AppController::edit_struktur_desa/$1");
// rtrw
$routes->post("proses_tambah_rtrw","AppController::proses_tambah_rtrw");

$routes->post("proses_edit_rtrw","AppController::proses_edit_rtrw");

$routes->get("rtrw/(:num)/hapus","AppController::hapus_rtrw/$1");

$routes->get("rtrw/(:any)/edit", "AppController::edit_rtrw/$1");
// Sejarah
$routes->post("proses_tambah_sejarah","AppController::proses_tambah_sejarah");

$routes->post("proses_edit_sejarah","AppController::proses_edit_sejarah");

$routes->get("sejarah/(:any)/hapus", "AppController::hapus_sejarah/$1");

$routes->get("sejarah/(:any)/edit", "AppController::edit_sejarah/$1");
// Visi Misi
$routes->post("proses_tambah_visimisi","AppController::proses_tambah_visimisi");

$routes->post("proses_edit_visimisi","AppController::proses_edit_visimisi");

$routes->get("visimisi/(:any)/hapus", "AppController::hapus_visimisi/$1");

$routes->get("visimisi/(:any)/edit", "AppController::edit_visimisi/$1");
// home
$routes->post("proses_tambah_home","AppController::proses_tambah_home");

$routes->post("proses_edit_home","AppController::proses_edit_home");

$routes->get("home/(:any)/hapus", "AppController::hapus_home/$1");

$routes->get("home/(:any)/edit", "AppController::edit_home/$1");

// Login Regist
$routes->get("register","RegistController::register");
$routes->post("proses_register","RegistController::proses_register");

$routes->get("login","LoginController::login");
$routes->post("proses_login","LoginController::proses_login");

$routes->get("logout","AppController::logout");


// User //

$routes->get("/", "HomeController::home");





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
