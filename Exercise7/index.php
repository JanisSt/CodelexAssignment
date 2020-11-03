<?php

require_once 'vendor/autoload.php';

use App\Dog;
use App\DogTest;


$dogs = [
    new DogTest('Max', 'male', 'Lady', 'Rocky'),
    new DogTest('Rocky', 'male', 'Molly', 'Sam'),
    new DogTest('Sparky', 'male', null, null),
    new DogTest('Buster', 'male', 'Lady', 'Sparky'),
    new DogTest('Sam', 'male', null, null),
    new DogTest('Lady', 'female', null, null),
    new DogTest('Molly', 'female', null, null),
    new DogTest('Coco', 'female', 'Molly', 'Buster')
];

foreach ($dogs as $dog) {
    if ($dog->getName() == 'Coco') {
        echo $dog->getName() . ' father is: ' . $dog->searchFathersName('Coco') . PHP_EOL;
    }
    if ($dog->getName() == 'Sparky') {
        echo $dog->getName() . ' father is: ' . $dog->searchFathersName('Sparky') . PHP_EOL;
    }
}

foreach ($dogs as $dog) {
    if ($dog->getName() == 'Rocky') {
        if ($dog->CocoHasSameMotherAs($dog) == true) {
            echo 'true';
        }
    }
}
