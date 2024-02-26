<?php

class Category 
{
    public $label;

    public function __construct($label)
    {
        $this->label = $label;
    }

    public function getCategoryLabel(){
        return $this->label;
    }
}