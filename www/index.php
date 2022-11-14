<?php

spl_autoload_register(function (string $className) {
    require_once '../src/' . str_replace('\\', '/', $className) . '.php';
});

$controller = new \MyProject\Controllers\MainController();
$controller->main();