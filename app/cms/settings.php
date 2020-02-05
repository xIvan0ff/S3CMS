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

    // CMS Routes
    require_once 'routes.php';

    return [
        'settings' => [
            'displayErrorDetails' => getenv('APP_DEBUG') === 'true' ? true : false, // set to false in production
            'addContentLengthHeader' => false,

            // Twig Template Settings
            'view' => [
                'path' => CMS_ROOT . '/Templates',
                'cache' => APP_ROOT . '/var/cache/twig',
                'debug' => true,
                'auto_reload' => true,
            ],

            // Database Settings
            'cms' => [
                'dsn' => 'sqlite',
                'dbname' => CMS_ROOT . '/Data/cms.db',
            ],
        ]

        /** Your settings should go down below */

    ];
