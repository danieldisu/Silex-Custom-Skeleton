<?php

$resume = $app['controllers_factory'];
$resume->get('/', function () { return 'Blog home page'; });
$resume->get('/show', function () { return 'Blog home page'; });

return $resume;