<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(WEB_PAGE);

/*
 * Controllers
 */
$router->namespace('Source\Controllers');

/*
 * INDEX
 */
$router->group(null);
$router->get('/','Index:home','Index.home');
$router->get('/login','Index:login','Index.login');
$router->get('/logout','Index:logout','Index.logout');


/*
 * ERROS
 */


$router->dispatch();

if($router->error()){

}

