<?php
require_once 'Zoo.php';

$zoo = new Zoo();

$tygrys = new Tiger('Shere Khan');
$slon = new Elephant('Bimbo');
$nosorozec = new Rhinoceros('Rocky');
$lis = new Fox('Foxy');
$irbis = new SnowLeopard('Ghost');
$krolik = new Rabbit('Bunny');

echo $tygrys.PHP_EOL;
echo $slon.PHP_EOL;
echo $nosorozec.PHP_EOL;
echo $lis.PHP_EOL;
echo $irbis.PHP_EOL;
echo $krolik.PHP_EOL.PHP_EOL;

$zoo->addAnimal($tygrys);
$zoo->addAnimal($slon);
$zoo->addAnimal($nosorozec);
$zoo->addAnimal($lis);
$zoo->addAnimal($irbis);
$zoo->addAnimal($krolik);

// Wyświetlenie wszystkich zwierząt
$zoo->showAnimals();
echo PHP_EOL;

// Karmienie
$tygrys->eatMeat('wołowina');
$slon->eatPlants('banany');
$nosorozec->eatPlants('trawa');
$lis->eatMeat('kurczak');
$lis->eatPlants('jagody');
$irbis->eatMeat('baranina');
$krolik->eatPlants('marchewka');
echo PHP_EOL;

// Czesanie futra
$tygrys->brushFur();
$lis->brushFur();
$irbis->brushFur();
$krolik->brushFur(); 