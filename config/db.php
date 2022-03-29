<?php

    class DataBase {

        public static function connect(){
            $db = new mysqli('localhost','root','1234','master_shop');
            $db->query("SET NAMES 'utf8'");
            return $db;
        }
    }