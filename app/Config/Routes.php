<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Cliente::index');

//CRUD
$routes->get('cliente-list', 'Cliente::index');
$routes->get('cliente-form', 'Cliente::create');
$routes->post('submit-form', 'Cliente::store');
$routes->get('edit-view/(:num)', 'Cliente::unicoCliente/$1');
$routes->post('update', 'Cliente::update');
$routes->get('delete/(:num)', 'Cliente::delete/$1');
