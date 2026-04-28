<?php

use CodeIgniter\Route\RouteCollection;

/**
 * @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/menu', 'Home::cafe');
$routes->get('/login', 'Home::login');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
$routes->post('auth', 'Home::auth');
$routes->get('/dashboard', 'Home::dashboard');
$routes->post('simpan_menu', 'Home::simpan_menu');
$routes->get('hapus_menu/(:num)', 'Home::hapus_menu/$1');
$routes->get('edit_menu/(:num)', 'Home::edit_menu/$1');
$routes->post('update_menu/(:num)', 'Home::update_menu/$1');
$routes->get('keranjang', 'Home::keranjang');
$routes->get('tambah_keranjang/(:num)', 'Home::tambah_keranjang/$1');
$routes->get('hapus_keranjang/(:num)', 'Home::hapus_keranjang/$1');