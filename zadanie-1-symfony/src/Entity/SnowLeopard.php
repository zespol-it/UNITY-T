<?php

namespace App\Entity;

class SnowLeopard extends Animal implements CarnivoreInterface, FurInterface
{
    public function getSpecies(): string
    {
        return 'Irbis śnieżny';
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