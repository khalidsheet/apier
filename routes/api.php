<?php 

/*

	API Router Page Allows you to define your Routes 


 */


// this is our Guide to the framework with love <3 
$route->get('/apier-v2', function() {
	return view('guide');
});	


$route->group(['prefix' => 'apier-v2/api'], function($route) {
	$route->post('/users/all', ['App\Controllers\HomeController', 'getAll']);
	$route->post('/users/{name}', ['App\Controllers\HomeController', 'getOneUser']);

	$route->any('/test', ['App\Controllers\HomeController', 'test']);

	$route->get('mail', ['App\Controllers\MailController', 'index']);
	$route->get('test_mail', ['App\Controllers\MailController', 'testMail']);


});






