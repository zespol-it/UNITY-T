<?php

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

use App\Entity\Tiger;
use App\Entity\Elephant;
use App\Entity\Rhinoceros;
use App\Entity\Fox;
use App\Entity\SnowLeopard;
use App\Entity\Rabbit;
use App\Service\Zoo;

$zoo = new Zoo();

$tygrys = new Tiger('Shere Khan');
$slon = new Elephant('Bimbo');
$nosorozec = new Rhinoceros('Rocky');
$lis = new Fox('Foxy');
$irbis = new SnowLeopard('Ghost');
$krolik = new Rabbit('Bunny');

echo $tygrys."\n";
echo $slon."\n";
echo $nosorozec."\n";
echo $lis."\n";
echo $irbis."\n";
echo $krolik."\n\n";

$zoo->addAnimal($tygrys);
$zoo->addAnimal($slon);
$zoo->addAnimal($nosorozec);
$zoo->addAnimal($lis);
$zoo->addAnimal($irbis);
$zoo->addAnimal($krolik);

$zoo->showAnimals();
echo "\n";

$tygrys->eatMeat('wołowina');
$slon->eatPlants('banany');
$nosorozec->eatPlants('trawa');
$lis->eatMeat('kurczak');
$lis->eatPlants('jagody');
$irbis->eatMeat('baranina');
$krolik->eatPlants('marchewka');
echo "\n";

$tygrys->brushFur();
$lis->brushFur();
$irbis->brushFur();
$krolik->brushFur(); 