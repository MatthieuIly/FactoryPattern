<?php

namespace App\Pizzeria;

use App\Pizza\Pizza;
use App\Pizza\PizzaFromage;
use App\Pizza\PizzaFromageStyleStrasbourg;
use App\Pizza\PizzaGrecque;
use App\Pizza\PizzaPoivron;

class PizzeriaStrasbourg extends Pizzeria
{
    public function __construct()
    {
        echo "Pizzeria Strasbourg \n";
    }

    public function creerPizza(string $type): Pizza
    {
        $pizza = null;
        if ($type == 'fromage') {
            $pizza = new PizzaFromageStyleStrasbourg();
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