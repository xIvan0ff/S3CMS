<?php

return [
    'settings' => [
        'displayErrorDetails' => getenv('APP_DEBUG') === 'true' ? true : false, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Twig Config
        'view' => [
            'path' => ROOT . '/templates',
            'cache' => ROOT . '/var/cache/twig',
            'debug' => true,
            'auto_reload' => true,
        ],

        // Database config
        'db' => [
            's3' => [ // Shifted3 Database
                'dsn' => 'sqlite',
                'dbname' => __DIR__ . '/data/cms.db',
            ],
            'default' => [
                'dsn' => 'mysql',
                'host' => '127.0.0.1',
                'dbname' => 'wowdb',
                'user' => 'phmeme',
                'pass' => 'n1auvayy',
            ],

        ],

        // JSON Web Token config
        'jwt' => [
            'secret' => 'KkMQrEbHqPmqMGD595bH46BcvXvhMbCx'
        ]
    ],
];