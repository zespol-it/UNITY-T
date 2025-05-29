<?php

namespace App\Entity;

class Rabbit extends Animal implements HerbivoreInterface, FurInterface
{
    public function getSpecies(): string
    {
        return 'Królik';
    }

    public function eatPlants(string $food): void
    {
        echo $this . " zjada roślinny posiłek: $food\n";
    }

    public function brushFur(): void
    {
        echo $this . " został wyczesany.\n";
    }
} 