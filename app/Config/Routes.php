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

// USER
$routes->get('user', 'AdminUserController::index');
$routes->get('user/create', 'AdminUserController::create');
$routes->post('user', 'AdminUserController::store');
$routes->get('user/(:num)', 'AdminUserController::show/$1');

// KERUSAKAN
$routes->get('kerusakan', 'AdminKerusakanController::index');
$routes->get('kerusakan/create', 'AdminKerusakanController::create');
$routes->post('kerusakan', 'AdminKerusakanController::store');
$routes->get('kerusakan/(:num)', 'AdminKerusakanController::show/$1');

// GEJALA
$routes->get('gejala', 'AdminGejalaController::index');
$routes->get('gejala/create', 'AdminGejalaController::create');
$routes->post('gejala', 'AdminGejalaController::store');
$routes->get('gejala/(:num)', 'AdminGejalaController::show/$1');

// LOGIN
$routes->get('login', 'LoginController::index');

// HOME
$routes->get('/', 'Home::index');

// DIAGNOSIS
$routes->get('diagnosis', 'DiagnosisController::index');
$routes->post('diagnosis/hasil', 'DiagnosisController::hasil');


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
