<?php

namespace App\Entity;

interface HerbivoreInterface
{
    public function eatPlants(string $food): void;
} 