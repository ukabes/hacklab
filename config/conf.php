<?php

return [

	'database' => [
		'database_type' => getenv('DB_CONNECTION'),
	    'database_name' => getenv('DB_DATABASE'),
	    'server' => getenv('DB_HOST'),
	    'username' => getenv('DB_USERNAME'),
	    'password' => getenv('DB_PASSWORD')
	],

	'app_folder' => dirname(__DIR__),

	'lib' => dirname(__DIR__).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'lib',

	'disp'=> dirname(__DIR__).DIRECTORY_SEPARATOR.'display'

];

// var_dump($return);
