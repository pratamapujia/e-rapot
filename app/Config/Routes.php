<?php

namespace Config;

use CodeIgniter\Commands\Utilities\Routes;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->addRedirect('/', 'home');
$routes->get('/guru', 'Guru::index', ['filter' => 'role:admin']);
$routes->get('/walas', 'Walas::index', ['filter' => 'role:admin']);
$routes->get('/siswa', 'Siswa::index', ['filter' => 'role:admin']);
$routes->get('/kelas', 'Kelas::index', ['filter' => 'role:admin']);
$routes->get('/mapel', 'Mapel::index', ['filter' => 'role:admin']);
$routes->get('/guru/create', 'Guru::create', ['filter' => 'role:admin']);
$routes->get('/walas/create', 'Walas::create', ['filter' => 'role:admin']);
$routes->get('/siswa/create', 'Siswa::create', ['filter' => 'role:admin']);
$routes->get('/kelas/create', 'Kelas::create', ['filter' => 'role:admin']);
$routes->get('/mapel/create', 'Mapel::create', ['filter' => 'role:admin']);
$routes->get('/guru/edit/(:segment)', 'Guru::edit/$1', ['filter' => 'role:admin']);
$routes->get('/siswa/edit/(:segment)', 'Siswa::edit/$1', ['filter' => 'role:admin']);
$routes->get('/kelas/edit/(:segment)', 'Kelas::edit/$1', ['filter' => 'role:admin']);
$routes->get('/walas/edit/(:segment)', 'Walas::edit/$1', ['filter' => 'role:admin']);
$routes->get('/mapel/edit/(:segment)', 'Mapel::edit/$1', ['filter' => 'role:admin']);
$routes->delete('/guru/(:alphanum)', 'Guru::delete/$1', ['filter' => 'role:admin']);
$routes->delete('/siswa/(:alphanum)', 'Siswa::delete/$1', ['filter' => 'role:admin']);
$routes->delete('/walas/(:alphanum)', 'Walas::delete/$1', ['filter' => 'role:admin']);
$routes->delete('/kelas/(:alphanum)', 'Kelas::delete/$1', ['filter' => 'role:admin']);
$routes->delete('/mapel/(:alphanum)', 'Mapel::delete/$1', ['filter' => 'role:admin']);
$routes->get('/guru/(:segment)', 'Guru::detail/$1', ['filter' => 'role:admin']);
$routes->get('/siswa/(:segment)', 'Siswa::detail/$1', ['filter' => 'role:admin']);

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
