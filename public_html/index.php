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


//Add the Routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

$router->dispatch($_SERVER['QUERY_STRING']);