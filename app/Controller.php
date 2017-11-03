<?php 

namespace App;

// Mailer System
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Controller
{

	public $mail;
	public $config = [];

	function __construct() {
		$this->mail = new PHPMailer();

        //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
		$this->mail->isSMTP();                                      // Set mailer to use SMTP
		$this->mail->Host = $this->config['host'];  // Specify main and backup SMTP servers
		$this->mail->SMTPAuth = true;                               // Enable SMTP authentication
		$this->mail->Username = $this->config['username'];               // SMTP username
		$this->mail->Password = $this->config['password'];                           // SMTP password
		$this->mail->SMTPSecure = $this->config['SMTPSecure'];                            // Enable TLS encryption, `ssl` also accepted
		$this->mail->Port = $this->config['port'];                                    // TCP port to connect to Recipients
		$this->mail->setFrom($this->config['your_email'], $this->config['alias_name']);

	}

	public function setMailConfig($array)
	{
		foreach ($array as $key => $value) {
			$this->config[$key] = $value;
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