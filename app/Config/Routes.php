<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('restaurantes', 'Home::restaurantes');
$routes->get('hoteles', 'Home::hoteles');
$routes->get('lugares', 'Home::lugares');
$routes->get('index', 'Home::index');