<?php 

namespace App\Controllers;

use App\Controller as BaseController;
use KAD;
use Rakit\Validation\Validator;
use Carbon\Carbon;

class HomeController extends BaseController
{
	public function getAll()
	{
		$time = Carbon::createFromDate(2012, 1, 1, 'Asia/Baghdad');
		return $time->diffForHumen();

		$users = KAD::table('users')->paginate(10);
		return $this->toJson($users);
	}

	public function getOneUser($name)
	{
		$this->request($_POST);

		$validation = new Validator;
		$validator = $validation->validate($this->request, [
			'id' => 'required'
		]);
		
		if ($validator->fails()) 
			return $this->toJson($validator->errors()->all());


		return $this->toJson($this->request);
	}

}