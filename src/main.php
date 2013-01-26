<?php


$main = $app['controllers_factory'];

$main->get('/', function () { 
	return 'Index Page'; 
});



return $main;