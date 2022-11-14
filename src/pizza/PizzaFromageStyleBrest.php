<?php

namespace App\Pizza;

class PizzaFromageStyleBrest extends Pizza
{
    public function __construct()
    {
        echo "Pizza Fromage Style Brest\n";
        $this->nom = "Pizza sauce style brest et fromage";
        $this->pate = "Pâte fine";
        $this->sauce = "Sauce Marinara";
        $this->garnitures[] = "Parmigiano reggiano râpé";
    }
}