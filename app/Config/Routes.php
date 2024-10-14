<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/news', 'News::index');
$routes->get('/news/create', 'News::create');
$routes->post('/news/store', 'News::store');
