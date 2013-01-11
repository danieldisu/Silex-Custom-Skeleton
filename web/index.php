<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->mount('/', include '../src/main.php');
$app->mount('/blog', include '../src/main.php');
$app->mount('/resume', include '../src/resume.php');


$app->run();
