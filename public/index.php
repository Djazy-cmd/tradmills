<?php

require_once '../loader/autoloader.php';



$router = new Router($_GET['url']);

$router->get('/public', function(){

    require '../pages/home.php';

});

$router->get('/pages', function(){

    require_once '../pages/register.php';

});

$router->get('/login', function(){

    require '../pages/login.php';

});


$router->get('/pages/:id-:slug', function($id, $slug){
    
    echo "$slug: $id";
})->with('id', '[0-9]+')->with('slug', '([a-z\-0-9]+)');



$router->run();

?>