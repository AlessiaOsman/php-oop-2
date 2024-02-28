<?php

require_once __DIR__ . '/Product.php';

class FoodProduct extends Product 
{
    private $ingredients;
    private $expiration;
    public static $type = 'Food'; //Parametro che non cambierà da istanza a instanza

    public function __construct($name, $image, Category $category, $ingredients, $expiration)
    {
        parent::__construct($name, $image, $category);
        
        $this->setIngredients($ingredients);
        $this->setExpiration($expiration);
    }

    public function getIngredients(){
        return $this->ingredients;
    }

    public function listIngredients(): string 
    {
        return implode(',', $this->ingredients). '.';
    }

    public function setIngredients(array $ingredients){
        return $this->ingredients = $ingredients;
    }

    public function getExpiration($as_string = true){
        if($as_string) return date('d-m-Y', $this->expiration);
        else return $this->expiration;
    }

    public function setExpiration(string $expiration){
        return $this->expiration = strtotime($expiration);
    }

    public function isExpired(){
        $today = strtotime(date('d-m-Y'));
        return $this->expiration > $today;
    }

}