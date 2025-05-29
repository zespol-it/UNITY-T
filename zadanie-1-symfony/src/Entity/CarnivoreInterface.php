<?php

namespace App\Entity;

interface CarnivoreInterface
{
    public function eatMeat(string $food): void;
} 