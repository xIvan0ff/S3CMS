<?php

    /**
     * Shifted 3 Framework
     *
     * File Description:
     * These are framework specific route declarations
     *
     * WARNING::  Unless you know what you are doing; we do not recommend changing these settings.
     * Buyer beware; you have been warned!
     *
     */

    // Testing Route arguments
    $app->get('/hello[/{name}]', function ($request, $response, array $args) {
        $name = $args['name'];
        $response->getBody()->write("<em>Hello $name</em>");

        return $response;
    });

    // Testing Settings Array
    $app->get('/version', function ($request, $response) {
        //var_dump($this->get('settings')['version']);
        $response->getBody()->write("<em>" . $this->get('settings')['project']['name'] . ' | ' . $this->get('settings')['project']['version'] . '.' . $this->get('settings')['project']['commit_hash'] . "</em>");
    });


