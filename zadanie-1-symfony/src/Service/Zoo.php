<?php

namespace App\Service;

use App\Entity\Animal;

class Zoo
{
    /** @var Animal[] */
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function showAnimals(): void
    {
        foreach ($this->animals as $animal) {
            echo $animal . "\n";
        }
    }
} 