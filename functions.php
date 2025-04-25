<?php

class Beverage
{
    public $color, $opacity, $temperature;
}
$tea = new Beverage();
$tea->temperature = "Hot";



class pet{
    public $first, $last;

    function getFullName(){
        return $this->first. "" . $this->last;    }
}


echo $newDetails->getFullName();