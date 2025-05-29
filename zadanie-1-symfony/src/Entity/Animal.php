<?php

namespace App\Entity;

abstract class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function getSpecies(): string;

    public function __toString(): string
    {
        return $this->getSpecies() . ' ' . $this->name;
    }
} 