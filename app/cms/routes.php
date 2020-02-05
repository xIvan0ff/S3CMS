<?php

    /**
     * SHIFTED 3 Content Management System.
     *
     * These are the route declarations for the CMS.
     * WARNING::  Unless you know what you are doing; we do not recommend changing these settings.
     * Buyer beware; you have been warned!
     *
     */

    // Index
    $app->get('/', function ($request, $response) {
        $response->write('<em>If you want a guarantee, buy a toaster!</em>');

        return $response;
    });

    /** Your settings should go down below */
