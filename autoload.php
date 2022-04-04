<?php

    function autoload($class){

     include_once "controllers/" . strtolower($class) . '.php';
      
    }

    spl_autoload_register('autoload');