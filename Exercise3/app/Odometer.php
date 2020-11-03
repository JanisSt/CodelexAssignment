<?php

namespace App;

class Odometer
{
    private int $mileage;
    private int $maxMileage;

    public function __construct(int $mileage, int $maxMileage)
    {

        $this->mileage = $mileage;
        $this->maxMileage = $maxMileage;
    }

    public function currentMileage()
    {
        return $this->mileage;
    }


    public function checkMaxMileage()
    {
        if ($this->mileage <= $this->maxMileage) {
            $this->mileage++;
        } elseif ($this->mileage === $this->maxMileage) {
            $this->mileage = 0;
        }
    }
//    public function addMileage()
//    {
//        $this->mileage++;
//    }


}