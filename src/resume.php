<?php
use Silex\Application;
$resume = $app['controllers_factory'];


$resume->get('/', function () use ($app) {
	//return "resume";
	return $app['twig']->render('hello.twig');
});


return $resume;