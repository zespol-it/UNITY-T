# Zadanie 1 — Wirtualne ZOO (Symfony)

## Opis (Polski)

System klas wirtualnego ZOO w strukturze Symfony:
- Encje w `src/Entity/` (Animal, Tiger, Elephant, Rhinoceros, Fox, SnowLeopard, Rabbit, interfejsy)
- Serwis ZOO w `src/Service/Zoo.php`
- Testy w `tests/`

### Diagram klas (UML)

![Diagram klas UML](uml/zoo.jpg)

### Diagram stanu (UML)

![Diagram stanu UML](uml/zoo_state.jpg)

### Diagram przypadków użycia (Use Case)

![Diagram use case UML](uml/zoo_usecase.jpg)

### Diagram klas (tekstowy UML)

```
App\Entity\Animal (abstract)
  |-- Tiger (CarnivoreInterface, FurInterface)
  |-- Elephant (HerbivoreInterface)
  |-- Rhinoceros (HerbivoreInterface)
  |-- Fox (OmnivoreInterface, FurInterface)
  |-- SnowLeopard (CarnivoreInterface, FurInterface)
  |-- Rabbit (HerbivoreInterface, FurInterface)

Interfaces:
- CarnivoreInterface: eatMeat()
- HerbivoreInterface: eatPlants()
- OmnivoreInterface: eatMeat(), eatPlants()
- FurInterface: brushFur()

App\Service\Zoo
- addAnimal()
- showAnimals()
```

---

# Task 1 — Virtual ZOO (Symfony)

## Description (English)

Virtual ZOO class system in Symfony structure:
- Entities in `src/Entity/` (Animal, Tiger, Elephant, Rhinoceros, Fox, SnowLeopard, Rabbit, interfaces)
- ZOO service in `src/Service/Zoo.php`
- Tests in `tests/`

### Class diagram (UML)

![UML class diagram](uml/zoo.jpg)

### State diagram (UML)

![UML state diagram](uml/zoo_state.jpg)

### Use case diagram (UML)

![UML use case diagram](uml/zoo_usecase.jpg)

### Class diagram (text UML)

```
App\Entity\Animal (abstract)
  |-- Tiger (CarnivoreInterface, FurInterface)
  |-- Elephant (HerbivoreInterface)
  |-- Rhinoceros (HerbivoreInterface)
  |-- Fox (OmnivoreInterface, FurInterface)
  |-- SnowLeopard (CarnivoreInterface, FurInterface)
  |-- Rabbit (HerbivoreInterface, FurInterface)

Interfaces:
- CarnivoreInterface: eatMeat()
- HerbivoreInterface: eatPlants()
- OmnivoreInterface: eatMeat(), eatPlants()
- FurInterface: brushFur()

App\Service\Zoo
- addAnimal()
- showAnimals()
``` 