<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../data/categories.php';
require_once __DIR__ . '/../data/products.php';

class Product 
{
    public $name;
    public $image;
    public $category;

    public function __construct($name, $image, Category $category)
    {
       $this->name = $name;
       $this->image = $image;
       $this->category = $category;
    }

   public function getCategory(){
    return 'Prodotto per ' . $this->category->getCategoryLabel();
   }

    
}; 