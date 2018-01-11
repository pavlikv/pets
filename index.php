<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 1/11/18
 * Time: 11:35 AM
 */
//require the autoload file
require_once ('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function() {
    echo '<h1>Pet Home</h1>';

    $view = new View;
    echo $view->render
    ('views/home.html');
}
);

//run Fat-Free
$f3->run();