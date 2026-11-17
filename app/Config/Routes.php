<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/home/spalten', 'Home::spalten');
$routes->get('/home/spalten_erstellen', 'Home::spalten_erstellen');
