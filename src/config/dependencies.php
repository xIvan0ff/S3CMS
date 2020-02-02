<?php

    use Slim\Http\Environment;
    use Slim\Views\Twig;
    use Slim\Views\TwigExtension;

    $container = $app->getContainer();

    $container['db'] = function ($c) {
        $db = $c['settings']['db'];
        switch ($db['dsn']) {
            case 'mysql':
                $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'],
                    $db['user'], $db['pass']);
                break;
            case 'sqlite':
                $pdo = new PDO('sqlite:' . $db['dbname']);
                break;
        }
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    };

    /* For later use or build into App */
    $container['view'] = function ($c) {
        $view = $c['settings']['twig'];

        $view = new Twig(['settings']['twig']);
        $router = $c->get('router');
        $uri = \Slim\Http\Uri::createFromEnvironment(new Environment($_SERVER));
        $view->addExtension(new TwigExtension($router, $uri));

        return $view;
    };