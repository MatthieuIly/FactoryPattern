<?php

namespace App\Pizza;

class PizzaFromageStyleStrasbourg extends Pizza
{
    public function __construct()
    {
        echo "Pizza Fromage Style Strasbourg\n";
        $this->nom = "Pizza sauce style Strasbourg et fromage";
        $this->pate = "Extra épaisse";
        $this->sauce = "Sauce aux tomates cerise";
        $this->garnitures[] = "Lamelle de mozzarella";
    }

    public function couper()
    {
        echo "Découpage en parts carrées";
    }
}