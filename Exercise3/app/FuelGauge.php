<?php

namespace App;

class FuelGauge
{
    private int $fuel_now;
    private int $fuel_full;

    public function __construct(int $fuel_now, int $fuel_full)
    {
        $this->fuel_now = $fuel_now;
        $this->fuel_full = $fuel_full;
    }

    public function getNow()
    {
        return $this->fuel_now;
    }

    public function getFull()
    {
        return $this->fuel_full;
    }

    public function getFill(): void
    {
        if ($this->fuel_now < 70) {
            $this->fuel_now++;
        }
    }


    public function spend()
    {
        if ($this->fuel_now > 0) {
            $this->fuel_now--;
        }
    }
}