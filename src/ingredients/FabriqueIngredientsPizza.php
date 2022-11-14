<?php

namespace App\Ingredients;

interface FabriqueIngredientsPizzaInterface
{
    public function creerPate(): Pate;
    public function creerSauce(): Sauce;
    public function creerFromage(): Fromage;
    public function creerLegumes(): Array;
    public function creerPoivrons(): Poivrons;
    public function creerMoules(): Moules;
}