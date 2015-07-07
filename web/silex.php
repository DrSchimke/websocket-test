<?php

require_once __DIR__.'/../vendor/autoload.php';

new \MyApp\Chat();
$app = new Silex\Application();
$app->get('/test/{name}', function ($name) {
    return 'Hello ' . $name;
});
$app->run();
