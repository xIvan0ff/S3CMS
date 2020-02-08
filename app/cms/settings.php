<?php

    /**
     * Shifted 3 Content Management System.
     *
     * These are the CMS Settings; Nothing really to do here as these are brought in from the environmental files
     *
     * WARNING::  Unless you know what you are doing; we do not recommend changing these settings.
     * Buyer beware; you have been warned!
     *
     */

    define('CMS_ROOT', __DIR__);

    define('MOD', dirname(CMS_ROOT));

    // CMS Routes
    require_once 'routes.php';

    return [
        'settings' => [


            // Database Settings
            'cms' => [
                'dsn' => 'sqlite',
                'dbname' => CMS_ROOT . '/Data/cms.db',
            ],
        ]

        /** Your settings should go down below */

    ];
