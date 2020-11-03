<?php

namespace App;

class Customer
{
    private int $surveyed;
    private float $purchased_energy_drinks;
    private float $prefer_citrus_drinks;

    public function __construct(int $surveyed, float $purchased_energy_drinks, float $prefer_citrus_drinks)
    {

        $this->surveyed = $surveyed;
        $this->purchased_energy_drinks = $purchased_energy_drinks;
        $this->prefer_citrus_drinks = $prefer_citrus_drinks;
    }

    public function getSurveyed(): int
    {
        return $this->surveyed;
    }

    function calculate_energy_drinkers()
    {
        return floor($this->surveyed * $this->purchased_energy_drinks);
    }

    function calculate_prefer_citrus()
    {
        return floor($this->surveyed * $this->prefer_citrus_drinks);
    }
}