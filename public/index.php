<?php

    define('ROOT', dirname(__DIR__));

    // Autoload
    require_once ROOT.'/vendor/autoload.php';

    // Bootstrap Framework
    require_once ROOT.'/src/bootstrap.php';

    // Run App
    $app->run();