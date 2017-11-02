<?php 

namespace App;

//use \Mobile_Detect;

class Controller
{


	// store all request body here
	public $request = []; 







	public function toJson($data)
	{
		return json_encode($data, true);
	}

	public function toArray($data)
	{
		return json_decode($data, true);
	}

}

 ?>