<?php

return [

    // if the fetch is true system try to connect database.use false for stop database connection.
    'fetch' => 'true',

    'default' => 'mysql',

    'connections' => [

        'sqlite' => [
            'driver'   => 'sqlite',
            'database' =>'/database.sqlite',
        ],

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'psr_4',
            'username'  =>  'root',
            'password'  =>  '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],

        'pgsql' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'psr_4',
            'username'  =>  'root',
            'password'  =>  'root',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],

    ],


];