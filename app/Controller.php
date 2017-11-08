<?php 

namespace App;

// Mailer System
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Controller
{

	public $mail;
	public static $config = [];

	function __construct() {
		$this->mail = new PHPMailer();

        //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
		$this->mail->isSMTP();                                      // Set mailer to use SMTP
		$this->mail->Host = static::$config['host'];  // Specify main and backup SMTP servers
		$this->mail->SMTPAuth = true;                               // Enable SMTP authentication
		$this->mail->Username = static::$config['username'];               // SMTP username
		$this->mail->Password = static::$config['password'];                           // SMTP password
		$this->mail->SMTPSecure = static::$config['SMTPSecure'];                            // Enable TLS encryption, `ssl` also accepted
		$this->mail->Port = static::$config['port'];                                    // TCP port to connect to Recipients
		$this->mail->setFrom(static::$config['your_email'], static::$config['alias_name']);

	}

	public static function setMailConfig(array $array)
	{
		foreach ($array as $key => $value) {
			static::$config[$key] = $value;
		}
	}

	public function toJson($data)
	{
		return json_encode($data, true);
	}

	public function toArray($data)
	{
		return json_decode($data, 1);
	}

}

 ?>