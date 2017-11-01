<?php

require_once 'vendor/autoload.php';
require 'config.php';

new \Pixie\Connection('mysql', $config, 'KAD');

require 'app/init.php';

