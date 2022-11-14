<?php

namespace App;

use App\Factory\SimpleFabriqueDePizza;

class Pizzeria
{
    private SimpleFabriqueDePizza $fabrique;

    public function __construct(SimpleFabriqueDePizza $fabrique)
    {
        $this->fabrique = $fabrique;
    }

    public function commanderPizza(string $type)
    {
        $pizza = $this->fabrique->creerPizza($type);

        $pizza->preparer();
        $pizza->cuire();
        $pizza->couper();
        $pizza->emballer();
        return $pizza;
    }
}