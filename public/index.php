<?php

// You'd probably want some composer's PSR-4 or similar auto-loading methods here
require_once __DIR__ . '/../app/Realm.php';

$realm = new Realm('World!');

$greeting = 'Hello';

// echo sprintf('%s dockerized %s!', $greeting, $realm->getName());

phpinfo();