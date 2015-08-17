<?php
require "vendor/autoload.php";
$app = new Slim\Slim();
$app->get('/', function () use ($app){
    $app->render('template.php');
});
$app->get('/hello', function (){
    $pdo = new PDO('mysql:host=localhost;dbname=dbms', 'kimsoeurn', '');
    $sql = "select * from users";
    $result = $pdo->query($sql);
    foreach ($result as $row) {
        var_dump($row);
    }
});
$app->run();


?>
