<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;


$app = new Application();

// Register Services

$app->register(new UrlGeneratorServiceProvider());

//$app->register(new ValidatorServiceProvider()); Uncomment if you want to use it


//Registering Twig service, so you can use it through the app
$app->register(new TwigServiceProvider(), array(
    'twig.path'    => array(__DIR__.'/views'),
));
$app['twig'] = $app->share($app->extend('twig', function($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
}));



return $app;