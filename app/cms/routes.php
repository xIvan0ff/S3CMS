<?php

    /**
     * Shifted 3 Content Management System.
     *
     * File Description:
     * Route declarations for the CMS.
     *
     * WARNING::  Unless you know what you are doing; we do not recommend changing these settings.
     * Buyer beware; you have been warned!
     *
     */

    // Defines


    // Index
    $app->get(
        '/',
        function ($request, $response) {
            // TODO: better way to identify /template/{sub folders} specific to application modules
            return $this->view->render($response, 'pages/index.twig');

        }
    );
