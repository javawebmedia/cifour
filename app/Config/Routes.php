<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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
$routes->get('/', 'Home::index');
$routes->get('admin/dasbor', 'admin/Dasbor::index');
// Berita
$routes->get('admin/berita', 'admin/Berita::index');
$routes->get('admin/berita/tambah', 'admin/Berita::tambah');
$routes->get('admin/berita/edit/$1', 'admin/Berita::edit/$1');
$routes->get('admin/berita/delete/$1', 'admin/Berita::delete/$1');
// Kategori
$routes->get('admin/kategori', 'admin/Kategori::index');
$routes->get('admin/kategori/tambah', 'admin/Kategori::tambah');
$routes->get('admin/kategori/edit/$1', 'admin/Kategori::edit/$1');
$routes->get('admin/kategori/delete/$1', 'admin/Kategori::delete/$1');
// User
$routes->get('admin/user', 'admin/User::index');
$routes->get('admin/user/tambah', 'admin/User::tambah');
$routes->get('admin/user/edit/$1', 'admin/User::edit/$1');
$routes->get('admin/user/delete/$1', 'admin/User::delete/$1');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
