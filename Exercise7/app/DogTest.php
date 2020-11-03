<?php

namespace App;
class DogTest extends Dog
{

    private ?string $mother;

    public function __construct(string $name, string $sex, ?string $mother, ?string $father)
    {
        parent::__construct($name, $sex, $mother, $father);

        $this->mother = $mother;
    }


    public function searchFathersName($test)
    {
        if ($this->getName() == $test) {
            return $this->getFather();
        } else return '';
    }

    public function SparkyFathersName()
    {
        if ($this->getName() == 'Sparky') {
            echo $this->getFather();
        }
    }

    public function CocoHasSameMotherAs(Dog $name): bool
    {
        return $this->mother === $name->mother;
    }

}

