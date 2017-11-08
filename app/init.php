<?php
	require './vendor/phpmailer/phpmailer/src/Exception.php';
	require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require './vendor/phpmailer/phpmailer/src/SMTP.php';
	require 'Http/Requester.php';

	// Routing System
	use Phroute\Phroute\RouteCollector;
	use Phroute\Phroute\Dispatcher;
	use App\Controller;


	$inAppFolder = glob('app/*.php');
	$controllers = glob('app/controllers/*.php');




	// require all the important files
	foreach ($inAppFolder as $apps) {
		require_once $apps;
	}


	// require all the controllers inside app/controllers/*.php folder
	foreach ($controllers as $controller) {
		require $controller;
	}

	// set default mail configuration.
	Controller::setMailConfig($mailConfig);
	
	// for routing system
	$route = new RouteCollector();
	include './routes/api.php';


	try {

		$dispatcher = new Dispatcher($route->getData());
		echo $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));	

	} catch (Phroute\Phroute\Exception\HttpMethodNotAllowedException $e) {
		echo errorException([
			'status' => 'error',
			'message' => 'Method not allows.',
			'method' => $e->getMessage()
		]);
	}
 ?>