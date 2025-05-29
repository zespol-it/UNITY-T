<?php

namespace App\Entity;

class Fox extends Animal implements OmnivoreInterface, FurInterface
{
    public function getSpecies(): string
    {
        return 'Lis';
    }

    public function eatMeat(string $food): void
    {
        echo $this . " zjada mięsny posiłek: $food\n";
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