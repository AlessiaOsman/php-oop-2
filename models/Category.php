<?php

class Category 
{
    private $label;

    public function __construct($label)
    {
        $this->setLabel($label);
    }

    public function getLabel (){
        return $this->label;
    }

    public function setLabel ($label){
        $this->label = $label;
    }

    
}