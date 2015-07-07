<?php
namespace MyApp;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Chat implements MessageComponentInterface
{
    public function onOpen(ConnectionInterface $conn) {
        $conn->send('HELLO');
        var_dump(__METHOD__, $conn);
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        var_dump(__METHOD__, $msg);
        $from->send('ECHO ' . $msg);
    }

    public function onClose(ConnectionInterface $conn) {
        var_dump(__METHOD__);
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        var_dump(__METHOD__);
    }
}