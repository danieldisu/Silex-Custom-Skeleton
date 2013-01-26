<?php


require_once __DIR__.'/../vendor/autoload.php';

ini_set('display_errors', 1);


$app = require __DIR__.'/../src/app.php';

require __DIR__.'/../src/config/dev.php';

require __DIR__.'/../src/MainController.php';

$app->run();