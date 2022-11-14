<?php

namespace Tests;

use App\Pizzeria\PizzeriaBrest;
use App\Pizzeria\PizzeriaStrasbourg;
use PHPUnit\Framework\TestCase;

class PizzaTestDrive extends TestCase
{
    public function testDrive()
    {
        $pizzeriaBrest = new PizzeriaBrest();
        $pizzeriaStrasbourg = new PizzeriaStrasbourg();

        $pizza = $pizzeriaBrest->commanderPizza("fromage");
        echo "Luc a commandé une " . $pizza->getNom() . "\n";

        $pizza = $pizzeriaStrasbourg->commanderPizza("fromage");
        echo "Michel a commandé une " . $pizza->getNom() . "\n";
    }
}