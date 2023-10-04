<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// HOME
$routes->get('/', 'Home::index');

// AUTH
$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/register', 'Auth::register');
$routes->post('/auth/valid_login', 'Auth::valid_login');
$routes->post('/auth/valid_register', 'Auth::valid_register');
$routes->get('/auth/logout', 'Auth::logout');

// USER
$routes->get('/user', 'User::index');
$routes->get('/user/tambah', 'User::tambah');
$routes->get('/user/lihat', 'User::lihat');
$routes->post('/penyewaan/save', 'Penyewaan::save');

// ADMIN
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/tambah/penyewaan', 'Admin::tambah');
$routes->post('/penyewaan/admin/save', 'Penyewaan::saveadmin');

// PENYEWAAN
$routes->delete('/penyewaan/(:num)', 'Penyewaan::delete/$1');
$routes->get('/penyewaan/edit/(:num)', 'Penyewaan::edit/$1'); 
$routes->post('/penyewaan/update/(:num)', 'Penyewaan::update/$1');