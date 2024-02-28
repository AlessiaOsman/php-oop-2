<?php

require_once __DIR__ . '/Product.php';

class ToyProduct extends Product 
{
    private $materials;
    private $color;
    public static $type = 'Toy'; //Parametro che non cambierà da istanza a instanza

    public function __construct($name, $image, Category $category, $color, $materials )
    {
        parent::__construct($name, $image, $category);
        
        $this->setColor($color);
        $this->setMaterials($materials);
        
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        return $this->color = $color;
    }

    public function getMaterials(){
        return $this->materials;
    }

    public function listMaterials(): string 
    {
        return implode(',', $this->materials). '.';
    }

    public function setMaterials(array $materials){
        return $this->materials = $materials;
    }

   
}