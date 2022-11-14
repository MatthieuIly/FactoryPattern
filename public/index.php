<?php

use App\Factory\SimpleFabriqueDePizza;

require __DIR__ . '/../vendor/autoload.php';

$simpleFabriqueDePizza = new SimpleFabriqueDePizza();
$pizzeria = new \App\Pizzeria($simpleFabriqueDePizza);
$pizzeria->commanderPizza("fromage");
