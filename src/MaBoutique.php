<?php

namespace App;

class MaBoutique
{
    public function commanderPizza(string $type): Pizza
    {
        if ($type == 'fromage') {
            $pizza = new PizzaFromage();
        } elseif ($type == "grecque") {
            $pizza = new PizzaGrecque();
        } elseif ($type == "poivron") {
            $pizza = new PizzaPoivron();
        }

        $pizza->preparer();
        $pizza->cuire();
        $pizza->couper();
        $pizza->emballer();
        return $pizza;
    }
}