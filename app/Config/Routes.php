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
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'AdminDashboardController::index', ['filter' => 'Auth']);

$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->get('/logout', 'Auth::logout');

$routes->post('/auth/login', 'Auth::doLogin');
$routes->post('/auth/register', 'Auth::doRegister');

// CRUD KERUSAKAN
$routes->get('kerusakan', 'AdminKerusakanController::index', ['filter' => 'Auth']);
$routes->get('kerusakan/create', 'AdminKerusakanController::create', ['filter' => 'Auth']);
$routes->post('kerusakan/store', 'AdminKerusakanController::store', ['filter' => 'Auth'], ['as' => 'kerusakan/store']);
$routes->get('kerusakan/show/(:num)', 'AdminKerusakanController::show/$1', ['filter' => 'Auth'], ['as' => 'kerusakan/show']);
$routes->get('kerusakan/edit/(:num)', 'AdminKerusakanController::edit/$1', ['filter' => 'Auth'], ['as' => 'kerusakan/edit']);
$routes->post('kerusakan/update/(:num)', 'AdminKerusakanController::update/$1', ['filter' => 'Auth'], ['as' => 'kerusakan/update']);
$routes->delete('kerusakan/delete/(:num)', 'AdminKerusakanController::destroy/$1', ['filter' => 'Auth'], ['as' => 'kerusakan/delete']);

// CRUD GEJALA
$routes->get('gejala', 'AdminGejalaController::index', ['filter' => 'Auth']);
$routes->get('gejala/create', 'AdminGejalaController::create', ['filter' => 'Auth']);
$routes->post('gejala/store', 'AdminGejalaController::store', ['filter' => 'Auth'], ['as' => 'gejala/store']);
$routes->get('gejala/show/(:num)', 'AdminGejalaController::show/$1', ['filter' => 'Auth'], ['as' => 'gejala/show']);
$routes->get('gejala/edit/(:num)', 'AdminGejalaController::edit/$1', ['filter' => 'Auth'], ['as' => 'gejala/edit']);
$routes->post('gejala/update/(:num)', 'AdminGejalaController::update/$1', ['filter' => 'Auth'], ['as' => 'gejala/update']);
$routes->delete('gejala/delete/(:num)', 'AdminGejalaController::destroy/$1', ['filter' => 'Auth'], ['as' => 'gejala/delete']);

// CRUD SOLUSI
$routes->get('solusi', 'AdminSolusiController::index', ['filter' => 'Auth']);
$routes->get('solusi/create', 'AdminSolusiController::create', ['filter' => 'Auth']);
$routes->post('solusi/store', 'AdminSolusiController::store', ['filter' => 'Auth'], ['as' => 'solusi/store']);
$routes->get('solusi/show/(:num)', 'AdminSolusiController::show/$1', ['filter' => 'Auth'], ['as' => 'solusi/show']);
$routes->get('solusi/edit/(:num)', 'AdminSolusiController::edit/$1', ['filter' => 'Auth'], ['as' => 'solusi/edit']);
$routes->post('solusi/update/(:num)', 'AdminSolusiController::update/$1', ['filter' => 'Auth'], ['as' => 'solusi/update']);
$routes->delete('solusi/delete/(:num)', 'AdminSolusiController::destroy/$1', ['filter' => 'Auth'], ['as' => 'solusi/delete']);

// CRUD RIWAYAT
$routes->get('riwayat', 'AdminRiwayatController::index', ['filter' => 'Auth']);
$routes->get('riwayat/show/(:num)', 'AdminRiwayatController::show/$1', ['filter' => 'Auth'], ['as' => 'riwayat/show']);
$routes->delete('riwayat/delete/(:num)', 'AdminRiwayatController::destroy/$1', ['filter' => 'Auth'], ['as' => 'riwayat/delete']);

// DIAGNOSIS
$routes->get('diagnosis', 'DiagnosisController::index', ['as' => 'diagnosis']);
$routes->get('diagnosis/hasil', 'DiagnosisController::hasil', ['as' => 'diagnosis/hasil']);


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
