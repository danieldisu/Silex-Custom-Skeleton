<?php

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$main = $app['controllers_factory'];

$main->get('/', function () { return 'Index Page'; });



return $main;