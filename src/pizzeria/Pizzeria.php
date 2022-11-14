<?php

namespace App\Pizzeria;

use App\Factory\SimpleFabriqueDePizza;
use App\Pizza\Pizza;

abstract class Pizzeria
{
    public function __construct()
    {
    }

    public function commanderPizza(string $type): Pizza
    {
        $pizza = $this->creerPizza($type);

        $pizza->preparer();
        $pizza->cuire();
        $pizza->couper();
        $pizza->emballer();
        return $pizza;
    }

    abstract public function creerPizza(string $type): Pizza;
}