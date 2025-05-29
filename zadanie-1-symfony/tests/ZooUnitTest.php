<?php

use PHPUnit\Framework\TestCase;
use App\Entity\Tiger;
use App\Entity\Elephant;
use App\Entity\Rhinoceros;
use App\Entity\Fox;
use App\Entity\SnowLeopard;
use App\Entity\Rabbit;
use App\Service\Zoo;

require_once __DIR__.'/../src/Entity/Animal.php';
require_once __DIR__.'/../src/Entity/CarnivoreInterface.php';
require_once __DIR__.'/../src/Entity/HerbivoreInterface.php';
require_once __DIR__.'/../src/Entity/OmnivoreInterface.php';
require_once __DIR__.'/../src/Entity/FurInterface.php';
require_once __DIR__.'/../src/Entity/Tiger.php';
require_once __DIR__.'/../src/Entity/Elephant.php';
require_once __DIR__.'/../src/Entity/Rhinoceros.php';
require_once __DIR__.'/../src/Entity/Fox.php';
require_once __DIR__.'/../src/Entity/SnowLeopard.php';
require_once __DIR__.'/../src/Entity/Rabbit.php';
require_once __DIR__.'/../src/Service/Zoo.php';

class ZooUnitTest extends TestCase
{
    public function testTigerToString()
    {
        $tiger = new Tiger('Shere Khan');
        $this->assertEquals('Tygrys Shere Khan', (string)$tiger);
    }

    public function testElephantToString()
    {
        $elephant = new Elephant('Bimbo');
        $this->assertEquals('Słoń Bimbo', (string)$elephant);
    }

    public function testAddAnimalToZoo()
    {
        $zoo = new Zoo();
        $rabbit = new Rabbit('Bunny');
        $zoo->addAnimal($rabbit);
        ob_start();
        $zoo->showAnimals();
        $output = ob_get_clean();
        $this->assertStringContainsString('Królik Bunny', $output);
    }

    public function testFoxOmnivore()
    {
        $fox = new Fox('Foxy');
        ob_start();
        $fox->eatMeat('kurczak');
        $fox->eatPlants('jagody');
        $output = ob_get_clean();
        $this->assertStringContainsString('Lis Foxy zjada mięsny posiłek: kurczak', $output);
        $this->assertStringContainsString('Lis Foxy zjada roślinny posiłek: jagody', $output);
    }

    public function testSnowLeopardFur()
    {
        $irbis = new SnowLeopard('Ghost');
        ob_start();
        $irbis->brushFur();
        $output = ob_get_clean();
        $this->assertStringContainsString('Irbis śnieżny Ghost został wyczesany.', $output);
    }
} 