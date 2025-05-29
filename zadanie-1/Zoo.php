<?php

abstract class Animal {
    protected string $name;
    
    public function __construct(string $name) {
        $this->name = $name;
    }
    
    abstract public function getSpecies(): string;
    
    public function __toString(): string {
        return $this->getSpecies() . ' ' . $this->name;
    }
}

interface Carnivore {   //Mięsożerca
    public function eatMeat(string $food): void;
}

interface Herbivore {   //Roślinożerca
    public function eatPlants(string $food): void;
}

interface Omnivore extends Carnivore, Herbivore {}  //Wszystkożerca

interface Fur {   //Futro
    public function brushFur(): void;
}

class Tiger extends Animal implements Carnivore, Fur {   //Tygrys
    public function getSpecies(): string { return 'Tygrys'; }
    public function eatMeat(string $food): void {
        echo "$this zjada mięsny posiłek: $food\n";
    }
    public function brushFur(): void {
        echo "$this został wyczesany.\n";
    }
}

class Elephant extends Animal implements Herbivore {   //Słoń
    public function getSpecies(): string { return 'Słoń'; }
    public function eatPlants(string $food): void {
        echo "$this zjada roślinny posiłek: $food\n";
    }
}

class Rhinoceros extends Animal implements Herbivore {   //Nosorożec
    public function getSpecies(): string { return 'Nosorożec'; }
    public function eatPlants(string $food): void {
        echo "$this zjada roślinny posiłek: $food\n";
    }
}

class Fox extends Animal implements Omnivore, Fur {   //Lis
    public function getSpecies(): string { return 'Lis'; }
    public function eatMeat(string $food): void {
        echo "$this zjada mięsny posiłek: $food\n";
    }
    public function eatPlants(string $food): void {
        echo "$this zjada roślinny posiłek: $food\n";
    }
    public function brushFur(): void {
        echo "$this został wyczesany.\n";
    }
}

class SnowLeopard extends Animal implements Carnivore, Fur {   //Irbis śnieżny
    public function getSpecies(): string { return 'Irbis śnieżny'; }
    public function eatMeat(string $food): void {
        echo "$this zjada mięsny posiłek: $food\n";
    }
    public function brushFur(): void {
        echo "$this został wyczesany.\n";
    }
}

class Rabbit extends Animal implements Herbivore, Fur {   //Królik
    public function getSpecies(): string { return 'Królik'; }
    public function eatPlants(string $food): void {
        echo "$this zjada roślinny posiłek: $food\n";
    }
    public function brushFur(): void {
        echo "$this został wyczesany.\n";
    }
}

class Zoo {   //ZOO
    private array $animals = [];
    public function addAnimal(Animal $animal): void {
        $this->animals[] = $animal;
    }
    public function showAnimals(): void {
        foreach ($this->animals as $animal) {
            echo $animal . "\n";
        }
    }
} 