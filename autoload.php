<?php

    function autoload(){

        include_once "controllers/UserController.php";
        include_once "controllers/ProductController.php";
        include_once "controllers/OrderController.php";
        include_once "controllers/CategoryController.php";
        include_once "controllers/ErrorController.php";
    }

    spl_autoload_register('autoload');