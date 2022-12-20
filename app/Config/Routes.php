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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/karyawan', 'Karyawan::index');
$routes->get('/karyawan/add', 'Karyawan::add');
$routes->get('/karyawan/edit/(:any)', 'Karyawan::edit/$1');
$routes->add('/karyawan/save', 'Karyawan::save');
$routes->add('/karyawan/update', 'Karyawan::update');
$routes->get('/karyawan/delete/(:any)', 'Karyawan::delete/$1');

$routes->get('/kriteria', 'Kriteria::index');
$routes->get('/kriteria/add', 'Kriteria::add');
$routes->get('/kriteria/edit/(:any)', 'Kriteria::edit/$1');
$routes->add('/kriteria/save', 'Kriteria::save');
$routes->add('/kriteria/update', 'Kriteria::update');
$routes->get('/kriteria/delete/(:any)', 'Kriteria::delete/$1');

$routes->get('/periode', 'Periode::index');
$routes->get('/periode/add', 'Periode::add');
$routes->get('/periode/add', 'Periode::add');
$routes->get('/periode/edit/(:any)', 'Periode::edit/$1');
$routes->add('/periode/save', 'Periode::save');
$routes->add('/periode/update', 'Periode::update');
$routes->get('/periode/delete/(:any)', 'Periode::delete/$1');


$routes->get('/kriteriaperiode', 'KriteriaPeriode::index');
$routes->post('/kriteriaperiode', 'KriteriaPeriode::index');
$routes->post('/kriteriaperiode/save', 'KriteriaPeriode::save');
$routes->get('/kriteriaperiode/setting/(:any)', 'KriteriaPeriode::setting/$1');

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
