<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__.'/../src/car.php';

session_start();
if (empty($_SESSION['new_session_array'])){
    $_SESSION['new_seesion_array'] = array();
}

$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(),
array('twig.path'=>__DIR__.'/../views'));

$app->get('/', function() {
    return "This is your home page";
});

return $app;
?>
