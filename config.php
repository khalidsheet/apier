<?php

// database configuration
$db = [
	'mysql' => [
		'HOST' => '127.0.0.1',
		'NAME' => 'apier_db',
		'USER' => 'root',
		'PASS' => ''
	]
];


$config = array(
    'driver'    => 'mysql', // Db driver
    'host'      => $db['mysql']['HOST'],
    'database'  => $db['mysql']['NAME'],
    'username'  => $db['mysql']['USER'],
    'password'  => $db['mysql']['PASS'],
    'charset'   => 'utf8', // Optional
    'collation' => 'utf8_unicode_ci', // Optional
    'prefix'    => '', // Table prefix, optional
);


$mailConfig = [
    'host' => 'smtp.gmail.com',
    'username' => 'test@mail.com',
    'password' => 'secret',
    'SMTPSecure' => 'tls',
    'port' => 587,

    // Set From E-mail
    'your_email' => 'fromEmail@gmail.com',

    // Leave it empty if you want to show email address
    'alias_name' => 'Test'
];

