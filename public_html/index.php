<?php
//Front Controller

require_once '../vendor/autoload.php';
//Load all modules in Composer and the classes

error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

date_default_timezone_set('America/Sao_Paulo');

session_start();
//Routing 
$router = new Core\Router();
//var_dump($_COOKIE);

//Add the Routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin', ['namespace' => 'Admin', 'controller' => 'Home', 'action' => 'index']);
$router->add('admin/', ['namespace' => 'Admin', 'controller' => 'Home', 'action' => 'index']);
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
$router->add('admin/Pedidos/{ped:\d+}', ['namespace' => 'Admin', 'controller' => 'Pedidos', 'action' => 'showPed']);
$router->add('admin/Usuarios/{usuario:\d+}', ['namespace' => 'Admin', 'controller' => 'Usuarios', 'action' => 'showUser']);

$router->dispatch($_SERVER['QUERY_STRING']);