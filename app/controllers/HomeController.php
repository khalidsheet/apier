<?php 

/*==========================================================
 *                                                         *
 *             This is the demo Controller                 *
 *              You Can find all what you                  *
 *               Need in this contoller                    *
 *                                                         *
 *                                                         *
 *                                                         *
 *                                                         *
 *========================================================*/

namespace App\Controllers;

use App\Controller as BaseController;
use KAD; // the Query Builder
use Rakit\Validation\Validator;
use Carbon\Carbon;

use App\Http\Requester;

class HomeController extends BaseController
{
	public function getAll()
	{

		$users = KAD::table('users')->limit(10)->get();
		return $this->toJson($users);
	}

	public function getOneUser($name)
	{
		// first of all store all the request in public request var
		$request = new Requester;

		// start the validation;
		$validation = new Validator;


		$validator = $validation->validate($this->request, [
			'id' => 'required'
		]);
		
		if ($validator->fails()) 
			return $this->toJson($validator->errors()->all());




		return $this->toJson($this->request);
	}


	public function testReq()
	{
		// make a new instance of this requester
		$request = new Requester;

		return $this->toJson($request->ip);


	}

}