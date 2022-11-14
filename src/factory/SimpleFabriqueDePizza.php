<?php

namespace App\Factory;

use App\Pizza\Pizza;
use App\Pizza\PizzaFromage;
use App\Pizza\PizzaGrecque;
use App\Pizza\PizzaPoivron;

class SimpleFabriqueDePizza
{
    public function creerPizza(string $type): Pizza|null
    {
        $pizza = null;

        if ($type == 'fromage') {
            $pizza = new PizzaFromage();
        } elseif ($type == "grecque") {
            $pizza = new PizzaGrecque();
        } elseif ($type == "poivron") {
            $pizza = new PizzaPoivron();
        }
        return $pizza;
    }
}