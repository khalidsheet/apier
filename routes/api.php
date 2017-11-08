<?php 

/*

	API Router Page Allows you to define your Routes 


 */



// this is our Guide to the framework with love <3 
$route->get('/apier', function() {
	return view('guide');
});	

	$route->get('apier/compact', function(){
		$d = ['dddd', 'ssasd', 'sdsd', 'sd', 'sd'];
		echo getMailContent('thanksForRegisteration', compact('d'));
	});

$route->group(['prefix' => 'apier/api'], function($route) {
	$route->get('/users/all', ['App\Controllers\HomeController', 'getAll']);
	$route->post('/users/{name}', ['App\Controllers\HomeController', 'getOneUser']);

	$route->any('/test', ['App\Controllers\HomeController', 'test']);

	$route->get('mail', ['App\Controllers\MailController', 'index']);
	$route->get('test_mail', ['App\Controllers\MailController', 'testMail']);


});






