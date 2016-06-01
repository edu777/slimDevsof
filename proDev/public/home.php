<?php
// instantiate the App object
require '../vendor/autoload.php';

$app = new \Slim\App;

// Add route callbacks
$app->get('/', function ($request, $response, $args) {
    return $response->withStatus(200)->write('Hello World!');
});

// Run application
$app->run();
