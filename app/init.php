<?php
	require './vendor/phpmailer/phpmailer/src/Exception.php';
	require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require './vendor/phpmailer/phpmailer/src/SMTP.php';
	require 'Http/Requester.php';
	include 'template_engine_filter.php';
	include 'filtersKernel.php';

	// Routing System
	use Phroute\Phroute\RouteCollector;
	use Phroute\Phroute\Dispatcher;
	use App\Controller;

	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();

	$inAppFolder = glob('app/*.php');
	$controllers = glob('app/controllers/*.php');


	foreach ($filters as $filter) {
		$twig->addFilter($$filter);
	}

	// set default TWIG settings
	$lexer = new Twig_Lexer($twig, array(
    	'tag_comment'   => array('{#', '#}'),
    	'tag_block'     => array('{@', '@}'),
    	'tag_variable'  => array('{{', '}}'),
    	'interpolation' => array('#{', '}'),
	));

	$twig->setLexer($lexer);







	// require all the important files
	foreach ($inAppFolder as $apps) {
		require_once $apps;
	}


	// require all the controllers inside app/controllers/*.php folder
	foreach ($controllers as $controller) {
		require $controller;
	}

	// set default mail configuration.
	Controller::setMailConfig($appConfig['mail']);
	
	// for routing system
	$route = new RouteCollector();
	include './routes/api.php';


	$dispatcher = new Dispatcher($route->getData());
	echo $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));	

 ?>