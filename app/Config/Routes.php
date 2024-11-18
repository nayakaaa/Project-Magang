<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Signup/daftar', 'Signup::daftar');


$routes->setAutoRoute(true);
