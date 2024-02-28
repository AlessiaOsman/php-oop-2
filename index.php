<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/data/products.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/data/categories.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container d-flex">
        <div class="row gap-3">
        <?php foreach ($products as $product): ?>
            <div  class="card col-4" style="width: 18rem;">
            <img src="<?=$product->getImage()?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$product->getName()?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?=$product->getCategory()?></li>
            </ul>
            <div class="card-body">
                <a href="<?=$product->getImage()?>" class="card-link">Visualizza l'immagine</a>
            </div>
        </div>
            <?php endforeach ?>
            </div>
        
    </div>
</body>

</html>