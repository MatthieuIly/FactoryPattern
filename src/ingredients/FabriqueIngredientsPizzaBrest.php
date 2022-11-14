<?php

namespace App\Ingredients;

class FabriqueIngredientsPizzaBrest implements FabriqueIngredientsPizzaInterface
{

    public function creerPate(): Pate
    {
        return new PateFine();
    }

    public function creerSauce(): Sauce
    {
        return new SauceMarinara();
    }

    public function creerFromage(): Fromage
    {
        return new Reggiano();
    }

    public function creerLegumes(): Array
    {
        return [
            new Ail(),
            new Oignon(),
            new Champignon(),
            new PoivronRouge()
        ];
    }

    public function creerPoivrons(): Poivrons
    {
        return new PoivronsEnRondelles();
    }

    public function creerMoules(): Moules
    {
        return new MoulesFraiches();
    }
}