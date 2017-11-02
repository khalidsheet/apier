<?php
	// Routing System
	use Phroute\Phroute\RouteCollector;
	use Phroute\Phroute\Dispatcher;

	// Mailer System
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require './vendor/phpmailer/phpmailer/src/Exception.php';
	require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require './vendor/phpmailer/phpmailer/src/SMTP.php';


	$inAppFolder = glob('app/*.php');
	$controllers = glob('app/controllers/*.php');

	// Require the main Controller Class
	require 'Controller.php';
	require 'Http/Requester.php';

	// require all the important files
	foreach ($inAppFolder as $apps) {
		require_once $apps;
	}

	// require all the controllers inside app/controllers/*.php folder
	foreach ($controllers as $controller) {
		require $controller;
	}
	
	// for routing system
	$route = new RouteCollector();
	include './routes/api.php';



	$dispatcher = new Dispatcher($route->getData());
	echo $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
 ?>