<?php 

/*

	API Router Page Allows you to define your Routes 


 */


$route->get('apier', function() {
	echo 'Home Page';
});	


$route->group(['prefix' => 'apier/api'], function($route) {
	$route->get('/users/all', ['App\Controllers\HomeController', 'getAll']);
	$route->post('/users/{name}', ['App\Controllers\HomeController', 'getOneUser']);

	$route->any('/test.apier', ['App\Controllers\HomeController', 'testReq']);
});






