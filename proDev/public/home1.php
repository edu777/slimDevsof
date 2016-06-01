<?php
require '../vendor/autoload.php';
$app = new \Slim\app();

$app->config(array(
     'debug'=>true,
     'templantes.path'=>'views',
	));

$app->get('/', function(){
	echo 'Hola';
	  });

$app->get('/home/:nombre', function($nombre) use($app){
	
	$data=array('nombre'=> $nombre, 'edad'=>20);	
	$app->render('templates.php', $data;
}) ->via('GET','POST')->conditions(array('nombre'=>'[a-z]{3,}'))->name('inicio');

$app-> get('/llamada', function() use($app){
	$url= $app-> urlFlor('icicio', array('nombre'=>'jimmy'));
	echo '<a href="'.$url.'"> Ir a home';
})

$app->run();