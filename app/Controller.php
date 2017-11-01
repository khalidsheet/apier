<?php 

namespace App;

class Controller
{
	public $request = []; 

	public function toJson($data)
	{
		return json_encode($data, true);
	}

	public function validator(array $inputs)
	{
		$errors = [];

		foreach ($inputs as $key => $value) {
			if ($value == 'required') {
				$errors[] = $this->RequiredValidator($value, $key);
			}
			
		}

		return $errors;
	}

	private function RequiredValidator(string $value, string $keyName)
	{
		if ($value == '' && empty($value) && !isset($value) ) {
			return $keyName . ' input is required!';
		}
	}

	public function request($postREQ)
	{
		foreach($postREQ as $key => $value) {
			$this->request[$key] = $value;
		}
	}
}

 ?>