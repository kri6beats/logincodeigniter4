<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes-> get('/', 'Home::home');
/**$routes->get('/ControllerFormulario', 'ControllerFormulario::formularios'); utilizamos cuando la ruta va direccto al controlador
*/
$routes->get('inicio','Home::inicio');

$routes->post('login', 'Home::login');

$routes->get('salir','Home::salir');