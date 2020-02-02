<?php

    // Load ENV
    use Dotenv\Dotenv;
    use Slim\App;

    $dotenv = Dotenv::create(dirname(__DIR__));
    $dotenv->load();

    // If No Session, Start It
    if ('' == session_id()) {
    session_start();
    }

    // Slim Framework Settings
    $settings = include_once __DIR__.'/conf/settings.php';
    $app = new App($settings);

    // Dependencies
    require_once __DIR__.'/conf/dependencies.php';

    // Middleware
    require_once __DIR__.'/conf/middleware.php';

    // Routes
    require_once 'routes.php';