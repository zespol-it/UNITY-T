<?php

namespace App\Entity;

class Tiger extends Animal implements CarnivoreInterface, FurInterface
{
    public function getSpecies(): string
    {
        return 'Tygrys';
    }

    public function eatMeat(string $food): void
    {
        echo $this . " zjada mięsny posiłek: $food\n";
    }

    public function brushFur(): void
    {
        echo $this . " został wyczesany.\n";
    }
} 