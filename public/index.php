<?php
//Autoload from composer
require '../vendor/autoload.php';

require_once('../app/Model.php');
require_once ('../app/models/userModel.php');
require_once ( '../app/controllers/userController.php');
require_once ('../app/models/postModel.php');
require_once ( '../app/controllers/postController.php');
require_once ('../app/models/commentModels.php');
require_once ('../app/controllers/commentController.php');

require_once ('instances.php');

//Package from display errors
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

//Package altoRouter
$router = new AltoRouter();

//Map Router
$router->map('GET', '/[i:id]', 'index', 'index');

$router->map('GET', '/', 'login', 'login');
$router->map('GET|POST', '/signup', 'signup', 'signup');

$router->map('GET', '/allPosts', 'allPosts', 'allPosts');
$router->map('GET', '/post/[i:id]/', 'post', 'post');
$router->map('GET', '/writePost', 'writePost', 'writePost');
$router->map('GET', '/updatePost/[i:id]', 'updatePost', 'updatePost');
$router->map('GET', '/menuAdmin', 'menuAdmin', 'menuAdmin');
$router->map('POST', '/app/controllers/createUserController.php', 'createUser', 'createUser');


//Match Router
$match = $router->match();

if (is_array($match)){
    if (is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']['id']);
    } else {
        ob_start();
        $target = $match['target'];
        $usersRegistered = callInstanceUsers();
        $postsCreate = callInstancePosts();
        $commentsCreate = callInstanceComments();
        callInstanceForCreateUser();
        include "../app/vue/{$target}.vue.php";
        $pageContent = ob_get_clean();
    }
} else {
    //No route matched
    ob_start();
    include '../app/vue/notFound.vue.php';
    $pageContent = ob_get_clean();
}

include  '../app/vue/layouts/defaultLayout.php';