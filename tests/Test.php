<?php
error_reporting(E_ALL);
require_once __DIR__.'/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$config = include __DIR__.'/../config/conf.php';

$data = json_decode(file_get_contents('./MOCK_DATA.json'),true);

$user = new Hacklab\Data\User();

$planner = new Hacklab\Data\Planner();

// var_dump($user);
// exit();

$count = 0;
foreach ($data as $dat) {
	 if (array_key_exists('id', $dat)) { 
	 	unset($dat['id']);
	 }
	 $user->createUser($dat);
	 $count++;
	 if ($count == 10) {
	 	break;
	 }
}
