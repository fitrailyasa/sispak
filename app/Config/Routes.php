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

// ADMIN
    $routes->get('dashboard', 'AdminDashboardController::index');

    // CRUD KERUSAKAN
    $routes->get('kerusakan', 'AdminKerusakanController::index');
    $routes->get('kerusakan/create', 'AdminKerusakanController::create');
    $routes->post('kerusakan/store', 'AdminKerusakanController::store', ['as' => 'kerusakan/store']);
    $routes->get('kerusakan/show/(:num)', 'AdminKerusakanController::show/$1', ['as' => 'kerusakan/show']);
    $routes->get('kerusakan/edit/(:num)', 'AdminKerusakanController::edit/$1', ['as' => 'kerusakan/edit']);
    $routes->post('kerusakan/update/(:num)', 'AdminKerusakanController::update/$1', ['as' => 'kerusakan/update']);
    $routes->delete('kerusakan/delete/(:num)', 'AdminKerusakanController::destroy/$1', ['as' => 'kerusakan/delete']);

    // CRUD GEJALA
    $routes->get('gejala', 'AdminGejalaController::index');
    $routes->get('gejala/create', 'AdminGejalaController::create');
    $routes->post('gejala/store', 'AdminGejalaController::store', ['as' => 'gejala/store']);
    $routes->get('gejala/show/(:num)', 'AdminGejalaController::show/$1', ['as' => 'gejala/show']);
    $routes->get('gejala/edit/(:num)', 'AdminGejalaController::edit/$1', ['as' => 'gejala/edit']);
    $routes->post('gejala/update/(:num)', 'AdminGejalaController::update/$1', ['as' => 'gejala/update']);
    $routes->delete('gejala/delete/(:num)', 'AdminGejalaController::destroy/$1', ['as' => 'gejala/delete']);

    // CRUD SOLUSI
    $routes->get('solusi', 'AdminSolusiController::index');
    $routes->get('solusi/create', 'AdminSolusiController::create');
    $routes->post('solusi/store', 'AdminSolusiController::store', ['as' => 'solusi/store']);
    $routes->get('solusi/show/(:num)', 'AdminSolusiController::show/$1', ['as' => 'solusi/show']);
    $routes->get('solusi/edit/(:num)', 'AdminSolusiController::edit/$1', ['as' => 'solusi/edit']);
    $routes->post('solusi/update/(:num)', 'AdminSolusiController::update/$1', ['as' => 'solusi/update']);
    $routes->delete('solusi/delete/(:num)', 'AdminSolusiController::destroy/$1', ['as' => 'solusi/delete']);

    // CRUD RIWAYAT
    $routes->get('riwayat', 'AdminRiwayatController::index');
    $routes->get('riwayat/show/(:num)', 'AdminRiwayatController::show/$1', ['as' => 'riwayat/show']);
    $routes->delete('riwayat/delete/(:num)', 'AdminRiwayatController::destroy/$1', ['as' => 'riwayat/delete']);


// LOGIN
$routes->group('auth', ['namespace' => 'IonAuth\Controllers'], function ($routes) {
    
	$routes->add('login', 'Auth::login');
	$routes->get('logout', 'Auth::logout');
	$routes->add('forgot_password', 'Auth::forgot_password');
	// $routes->get('/', 'Auth::index');
	// $routes->add('create_user', 'Auth::create_user');
	// $routes->add('edit_user/(:num)', 'Auth::edit_user/$1');
	// $routes->add('create_group', 'Auth::create_group');
	// $routes->get('activate/(:num)', 'Auth::activate/$1');
	// $routes->get('activate/(:num)/(:hash)', 'Auth::activate/$1/$2');
	// $routes->add('deactivate/(:num)', 'Auth::deactivate/$1');
	// $routes->get('reset_password/(:hash)', 'Auth::reset_password/$1');
	// $routes->post('reset_password/(:hash)', 'Auth::reset_password/$1');
	// ...
});

// HOME
$routes->get('/', 'Home::index');

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
