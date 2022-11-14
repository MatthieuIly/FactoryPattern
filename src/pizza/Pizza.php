<?php

namespace App\Pizza;

Abstract class Pizza
{
    public function preparer()
    {
        echo "Préparation de la pizza. \n";
    }

    public function cuire()
    {
        echo "Cuisson de la pizza. \n";
    }

    public function couper()
    {
        echo "Découpage de la pizzza. \n";
    }

    public function emballer()
    {
        echo "Emballage de la pizza. \n";
    }
}