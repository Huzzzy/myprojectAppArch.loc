<?php

require '../src/MyProject/Models/Users/Users.php';
require '../src/MyProject/Models/Articles/Article.php';

$author = new User('Иван');
$article = new Article('Заголовок', 'Текст', $author);
var_dump($article);