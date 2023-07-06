<?php
//Autoload from composer
require '../vendor/autoload.php';

//Package from display errors
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

//Package altoRouter
$router = new AltoRouter();

//Map Router
$router->map('GET', '/', 'index', 'index');
$router->map('GET', '/contact', 'contact', 'contact');

//Match Router
$match = $router->match();

if (is_array($match)){
    if (is_callable( $match['target'])) {
        call_user_func_array( $match['target'], $match['params']);
    } else {
        $params = $match['target'];
        include "../app/vue/{$params}.vue.php";
    }
} else {
    //No route matched
    include '../app/vue/notFound.vue.php';
}
