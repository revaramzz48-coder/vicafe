<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Home::cafe');
$routes->get('login', 'Home::login');
$routes->post('auth', 'Home::auth');
$routes->get('dashboard', 'Home::dashboard');
$routes->post('simpan_menu', 'Home::simpan_menu');