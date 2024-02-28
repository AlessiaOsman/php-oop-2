<?php

require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/categories.php';
require_once __DIR__ . '/../models/FoodProduct.php';
require_once __DIR__ . '/../models/ToyProduct.php';
require_once __DIR__ . '/../models/KennelProduct.php';

$products = [
    new FoodProduct(
            'Royal Canin Mini Adult',
            'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000',
            $categories['dog'],
            ['Prosciutto', 'Formaggio'],
            2025 - 11 - 10
        ),
    new FoodProduct(
            'Almo Nature Holistic Maintenance Medium Large Tonno e Riso',
            'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
            $categories['dog'],
            ['Prosciutto', 'Formaggio'],
            2025 - 11 - 10
        ),
    new FoodProduct(
            'Almo Nature Cat Daily Lattina',
            'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
            $categories['cat'],
            ['Prosciutto', 'Formaggio'],
            2025 - 11 - 10
        ),
    new FoodProduct(
            'Mangime per Pesci Guppy in Fiocchi',
            'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',
            $categories['fish'],
            ['Prosciutto', 'Formaggio'],
            2025 - 11 - 10
        ),
    new KennelProduct(
            'Voliera Wilma in Legno',
            'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',
            $categories['bird'],
            'yellow',
            'XXL',
        ),
    new KennelProduct(
            'Cartucce Filtranti per Filtro EasyCrystal',
            'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',
            $categories['fish'],
            'yellow',
            'XXL',
        ),
    new ToyProduct(
            'Kong Classic',
            'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',
            $categories['dog'],
            'yellow',
            ['Plastic', 'Plastic'],
        ),
    new ToyProduct(
            'Topini di peluche Trixie',
            'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
            $categories['cat'],
            'yellow',
            ['Plastic', 'Plastic'],
        ),


];
