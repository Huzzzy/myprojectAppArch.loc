<?php

spl_autoload_register(function (string $className) {
    require_once '../src/' . str_replace('\\', '/', $className) . '.php';
});

$author = new \MyProject\Models\Users\User('Иван');
$article = new \MyProject\Models\Articles\Article('Заголовок', 'Текст', $author);
var_dump($article);