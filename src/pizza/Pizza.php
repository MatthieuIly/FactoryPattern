<?php

namespace App\Pizza;

Abstract class Pizza
{
    protected string $nom;

    protected string $pate;

    protected string $sauce;

    protected array $garnitures;

    public function preparer()
    {
        echo "Préparation de " . $this->nom . "\n";
        echo "Etalage de la pate " . $this->pate . "\n";
        echo "Ajout de la sauce " . $this->sauce . "\n";
        echo "Ajout des garnitures : \n";
        foreach ($this->garnitures as $v) {
            echo "$v \n";
        }
    }

    public function cuire()
    {
        echo "Cuisson 25 minutes à 180°. \n";
    }

    public function couper()
    {
        echo "Découpage en parts triangulaires. \n";
    }

    public function emballer()
    {
        echo "Emballage dans une boîte officielle. \n";
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }
}