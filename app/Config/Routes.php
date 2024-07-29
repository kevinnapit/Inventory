<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Dashboard::index');
$routes->get('/login', 'Login::index');
$routes->get('/logout', 'Login::logout');
$routes->post('/Login/authenticate', 'Login::authenticate');

$routes->get('/register', 'RegisterController::index');
$routes->post('/registercontroller/store', 'RegisterController::store');

$routes->get('items', 'ItemController::index');
$routes->get('inventaris/edit/(:num)', 'Inventaris::edit/$1');
$routes->post('inventaris/inventaris_update/(:num)', 'Inventaris::inventaris_update/$1');
$routes->get('inventaris/edit/(:num)', 'Inventaris::edit/$1');
$routes->get('inventaris/delete/(:segment)', 'inventaris::delete/$1');

$routes->get('categoris/create', 'Categoris::create');
$routes->get('categoris/delete/(:segment)', 'categoris::delete/$1');
$routes->post('categoris/category_update/(:num)', 'Categoris::category_update/$1');


//location
$routes->get('location/create', 'Location::create');
$routes->post('location/location_store', 'Location::location_store');
$routes->post('location/delete', 'Location::delete');
$routes->post('location/location_update/(:num)', 'Location::location_update/$1');

$routes->get('items/sum_price', 'Items::sumPrice');
