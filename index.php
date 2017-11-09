<?php



error_reporting(E_ALL); 
ini_set('display_errors', 1);

require_once __DIR__ .'/vendor/autoload.php';

include 'config.php';

new \Pixie\Connection('mysql', $config, 'KAD');

$loader = new Twig_Loader_Filesystem('mails');
$view = new Twig_Environment($loader);

include __DIR__ . '/app/init.php';



