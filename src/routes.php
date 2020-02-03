<?php


    // Index
    $app->get('/', function ($request, $response) {
        $response->write('<em>If you want a guarantee, buy a toaster</em>');

        return $response;
    });

    // Testing Routes
    $app->get('/hello[/{name}]', function ($request, $response, array $args) {
        $name = $args['name'];
        $response->getBody()->write("Hello $name");

        return $response;
    });
