<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/users', 'UserController::index');
$routes->get('/products', 'ProductController::index');
$routes->get('/supermarkets', 'SuperController::index');
$routes->get('/tickets', 'TicketController::index');