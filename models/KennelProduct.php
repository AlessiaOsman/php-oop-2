<?php

require_once __DIR__ . '/Product.php';

class KennelProduct extends Product 
{
    private $size;
    private $color;
    public static $type = 'Kennel'; //Parametro che non cambierà da istanza a instanza

    public function __construct($name, $image, Category $category, $color, $size)
    {
        parent::__construct($name, $image, $category);
        
        $this->setColor($color);
        $this->setSize($size);
        
        
    }

    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        return $this->size = $size;
    }


    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        return $this->color = $color;
    }
   
}