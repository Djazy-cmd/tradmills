<?php

spl_autoload_register('app_autoload');

function app_autoload($class){

    require_once __ROOT__."/class/$class.php";

}