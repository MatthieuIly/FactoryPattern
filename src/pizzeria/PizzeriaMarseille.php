<?php

namespace App\Pizzeria;

use App\Pizza\Pizza;
use App\Pizza\PizzaFromage;
use App\Pizza\PizzaGrecque;
use App\Pizza\PizzaPoivron;

class PizzeriaMarseille extends Pizzeria
{
    public function __construct()
    {
        echo "Pizzeria Marseille \n";
    }

    public function creerPizza(string $type): Pizza
    {
        $pizza = null;
        if ($type == 'fromage') {
            $pizza = new PizzaFromage();
        } elseif ($type == "grecque") {
            $pizza = new PizzaGrecque();
        } elseif ($type == "poivron") {
            $pizza = new PizzaPoivron();
        } elseif ($type == "fruitDeMer") {
            $pizza = new PizzaFruitDeMer();
        } elseif ($type == "vegetarienne") {
            $pizza = new PizzaVegetarienne();
        }
        return $pizza;
    }
}