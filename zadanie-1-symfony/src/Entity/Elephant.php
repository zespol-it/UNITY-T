<?php

namespace App\Entity;

class Elephant extends Animal implements HerbivoreInterface
{
    public function getSpecies(): string
    {
        return 'Słoń';
    }

    public function eatPlants(string $food): void
    {
        echo $this . " zjada roślinny posiłek: $food\n";
    }
} 