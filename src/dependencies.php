<?php

    /**
     * Shifted 3 Framework
     *
     * File Description:
     * Framework Dependency Injections (Containers)
     *
     * WARNING::  Unless you know what you are doing; we do not recommend changing these settings.
     * Buyer beware; you have been warned!
     *
     */

    use Slim\Http\Environment;
    use Slim\Http\Uri;
    use Slim\Views\Twig;
    use Slim\Views\TwigExtension;

    $container = $app->getContainer();

    /**
     * @param $c
     * @return PDO
     */
    // Database Container
    $container['db'] = function ($c) {
        $db = $c['settings']['db'];
        switch ($db['dsn']) {
            case 'mysql':
                $pdo = new PDO(
                    "mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'],
                    $db['user'], $db['pass']
                );
                break;
            case 'sqlite':
                $pdo = new PDO('sqlite:' . $db['dbname']);
                break;
        }
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    };


    /**
     * @param $c
     * @return mixed|Twig
     */
    // Twig View Container
    $container['view'] = function ($c) {
        $view = new Twig(ROOT . '/templates/', [
            'cache' => false,
        ]);

        // Instantiate and add Slim specific extension
        $router = $c->get('router');
        $uri = Uri::createFromEnvironment(new Environment($_SERVER));
        $view->addExtension(new TwigExtension($router, $uri));

        return $view;
    };

