<?php 

namespace App\Http;
	
/**
* 
*/
class Requester
{
	// store all the request here
	public $request = [];

	// store the only requests that you need
	public $onlyThisRequest = [];


	public $userAgent;

	public $ip;

	public $getMethod;

	public $postMethod;


	function __construct()
	{
		foreach ($_REQUEST as $key => $value) {
			$this->request[$key] = $value;

			$this->$key = $value;
		}

		$this->ip         = $_SERVER['REMOTE_ADDR'];
		$this->userAgent  = $_SERVER['HTTP_USER_AGENT'];

		$this->getMethod  = $_SERVER['REQUEST_METHOD'] == 'GET'  ? true : false;
		$this->postMethod = $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;
		
	}


	public function all()
	{
		return $this->request;
	}

	public function only(array $param)
	{
		if (is_array($param)) {
			foreach ($param as $key) {
				@$this->onlyThisRequest[$key] = $this->request[$key];
			}
		}

		return $this->onlyThisRequest;	
	}

	public function get($request)
	{
		return $this->request[$request];
	}

	public function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}

	public function isGetMethod()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'GET'){
			return true;
		}
	}

	public function isPostMethod()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			return true;
		}
	}

	
}