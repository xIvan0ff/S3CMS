<?php

    /**
     * SHIFTED 3 FRAMEWORK.
     *
     * This is the Main Controller for Dependency Injection
     * WARNING::  Unless you know what you are doing; we do not recommend changing these settings.
     * Buyer beware; you have been warned!
     *
     */

    namespace S3\Controllers;

    use Psr\Container\ContainerInterface;

    /**
     * Class Controller
     * @package S3\Controllers
     */
    Abstract class Controller
    {
        /**
         * @var ContainerInterface
         */
        protected $container;

        /**
         * Controller constructor.
         * @param ContainerInterface $container
         */
        function __construct(ContainerInterface $container)
        {
            $this->container = $container;
        }

        /**
         * @param $property
         * @return mixed
         */
        function __get($property)
        {
            if ($this->container->{$property}) {
                return $this->container->{$property};
            }
        }
    }