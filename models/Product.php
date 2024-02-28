<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../data/categories.php';
require_once __DIR__ . '/../data/products.php';

class Product
{
   protected $id;
   protected $name;
   protected $image;
   protected $category;

   public function __construct($name, $image, Category $category)
   {
      $this->setId();
      $this->setName($name);
      $this->setImage($image);
      $this->setCategory($category);
   }

   public function getId()
   {
      return $this->id;
   }

   private function setId()
   {
      $this->id = uniqid();
   }

   public function getName()
   {
      return $this->name;
   }

   public function setName($name)
   {
      $this->name = $name;
   }

   public function getImage()
   {
      return $this->image;
   }

   public function setImage($image)
   {
      $this->image = $image;
   }

   public function getCategory()
   {
      return 'Prodotto per ' . $this->category->getLabel();
   }

   public function setCategory($category)
   {  if($category instanceof Category) $this->category = $category;
      else return false;
   }
};
