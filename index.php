<?php
error_reporting(E_ALL);
require_once __DIR__.'/vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$config = include __DIR__.'/config/conf.php';

$router = new AltoRouter();


$match = $router->match();

if( $match ) {
	call_user_func_array( $match['target'], $match['params'] ); 
}else{
	header("HTTP/1.1 404 Not Found");
}


