<?php

namespace App\Entity;

class Rhinoceros extends Animal implements HerbivoreInterface
{
    public function getSpecies(): string
    {
        return 'Nosorożec';
    }

    public function eatPlants(string $food): void
    {
        echo $this . " zjada roślinny posiłek: $food\n";
    }
} 