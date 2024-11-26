<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/dashboard', 'Dashboard::index'); 
$routes->get('/logout', 'Login::logout'); 
$routes->get('/register', 'register::index'); 



