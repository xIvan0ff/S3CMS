<?php

    /**
     * Shifted 3 Framework
     *
     * File Description:
     * These are framework specific settings
     *
     * WARNING::  Don't be a dick.
     *
     */

    // Load ENV
    $dotenv = \Dotenv\Dotenv::create(ROOT);
    $dotenv->load();

    return [
        'settings' => [
            'project' => [
                'name' => 'Shifted3Framework',
                'version' => '2.1',
                'commit_hash' => exec('git rev-parse --short HEAD'),
            ],

            // JSON Web Token config (For API Implementation Later)
            'jwt' => [
                'secret' => 'KkMQrEbHqPmqMGD595bH46BcvXvhMbCx'
            ]
        ],
    ];