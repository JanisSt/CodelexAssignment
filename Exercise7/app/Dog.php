<?php

namespace App;

class Dog
{
    private string $name;
    private string $sex;
    private ?string $mother;
    private ?string $father;

    public function __construct(string $name, string $sex, ?string $mother, ?string $father)
    {

        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSex(): string
    {
        return $this->sex;
    }


    public function getMother(): ?string
    {
        return $this->mother;
    }


    public function getFather(): ?string
    {
        return $this->father ?? 'Unknown';
    }

}