<?php

class Session {

        static $instance;

        static function getInstance(){

            if (!self::$instance) {
                
                self::$instance = new Session();
            }

            return self::$instance; 
        }


    public function __Construct(){

            session_start();

    }

    public function setFlache($key, $message){

            $_SESSION['flach'][$key] = $message; 

    }

    public function hasFlache(){

        return isset($_SESSION['flach']);
    }

    public function getFlache(){

        $flach = $_SESSION['flach'];
        
        unset($_SESSION['flach']);
        
        return $flach;
    }

}