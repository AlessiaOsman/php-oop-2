<?php

require_once __DIR__ . '/../models/Category.php';

$categories = [
    'dog' => new Category('Cani'),
    'cat' => new Category('Gatti'),
    'bird' => new Category('Uccelli'),
    'fish' => new Category('Pesci'),
];  