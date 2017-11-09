<?php

// App Configuration
$appConfig = [

    // database connection
    'db' => [

        'driver'    => 'mysql', // Db driver
        'host'      => 'localhost',
        'database'  => 'apier_db',
        'username'  => 'root',
        'password'  => '',
        'charset'   => 'utf8', // Optional
        'collation' => 'utf8_unicode_ci', // Optional
        'prefix'    => '' // Table prefix, optional

    ],


    // Mail System config
    'mail' => [

        'host'       => 'smtp.gmail.com',
        'username'   => 'test@domain.com',
        'password'   => 'secret',
        'SMTPSecure' => 'tls',
        'port'       => 587,

        // Set From E-mail
        'your_email' => 'fromEmail@gmail.com',

        // Leave it empty if you want to show email address
        'alias_name' => 'Test'
    ], 

]; 