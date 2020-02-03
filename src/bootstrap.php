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
    $settings = include_once __DIR__.'/config/settings.php';
    $app = new App($settings);

    // Dependencies
    require_once __DIR__.'/config/dependencies.php';

    // Middleware
    require_once __DIR__.'/config/middleware.php';

    // Routes
    require_once 'routes.php';