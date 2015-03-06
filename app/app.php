<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__.'/../src/car.php';

session_start();
if (empty($_SESSION['new_session_array'])){
    $_SESSION['new_session_array'] = array();
}

$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(),array('twig.path'=>__DIR__.'/../views'));

$app->get('/', function() use ($app){
    return $app['twig']->render('home.twig', array('array_of_all_cars'=>Car::getAll()));
});

$app->post('/post_new_car', function() use($app){
    $new_car_info = new Car($_POST['make'], $_POST['price']);
    $new_car_info->save();
    return $app['twig']->render('list_of_cars.twig', array('car'=> $new_car_info));
    //show new info user entered & save it for use in new array
});

// $app->post('/add_new_car_to_array', function() use($app){
//     //show new info user entered
//
//     return $app['twig']
// });

return $app;
?>
