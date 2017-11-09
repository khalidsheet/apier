<?php

error_reporting(E_ALL);


ini_set('display_errors', 1);


require_once __DIR__ .'/vendor/autoload.php';


include 'config.php';


new \Pixie\Connection('mysql', $appConfig['db'], 'KAD');


$loader = new Twig_Loader_Filesystem('mails');


$twig = new Twig_Environment($loader);


require_once __DIR__ . '/app/init.php';