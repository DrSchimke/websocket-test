<?php
use Ratchet\Server\IoServer;
use MyApp\Chat;

    require dirname(__DIR__) . '/vendor/autoload.php';
    require_once __DIR__ . '/../src/Chat.php';

    $server = IoServer::factory(
        new Chat(),
        8080
    );

    $server->run();
