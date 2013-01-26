<?php
// Dev Enviroment Configuration

// Monolog for logging
use Silex\Provider\MonologServiceProvider;

require __DIR__.'/prod.php';

$app['debug'] = true;

$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/silex.log',
));
