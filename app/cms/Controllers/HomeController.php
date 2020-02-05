<?php

    namespace App\Controllers;

    use S3\Controllers\Controller;

    class HomeController extends Controller
    {
        function index($request, $response)
        {
            return $this->container->view->render($response, 'home.twig');
        }
    }