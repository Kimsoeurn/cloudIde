<?php
require "vendor/autoload.php";
$app = new Slim\Slim();
$app->get('/', function () use ($app){
    $app->render('template.php');
});
$app->get('/hello', function (){
    var_dump("Hello Slim Framework");
});
$app->run();


?>
