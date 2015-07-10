<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app->get('/test/{name}', function ($name) {
    return 'Hello ' . $name;
});

$app->run();
