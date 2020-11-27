<?php

;

class App {

    static $db  = null;

    static function getDatabase(){

        if (!self::$db) {

            self::$db = new Database('root', '', 'invest_btc');


        }

        return self::$db;
    }

    static function redirect($page){

        header("Location: $page");

        exit();

    }
}