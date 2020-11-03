<?php

namespace App;

class SavingsAccount
{
    private float $startingMoney;
    private float $interest;
    private float $with = 0;
    private float $dep = 0;
    private float $inte = 0;

    public function __construct(float $startingMoney, float $interest)
    {

        $this->startingMoney = $startingMoney;
        $this->interest = $interest;
        $this->dep;
        $this->with;
    }

    public function subtract($sub_sum): float
    {
        return ($this->with - $sub_sum);
    }

    public function add($add_sum): float
    {
        return ($this->dep + $add_sum);
    }

    public function interest($balance, $percent): float
    {
        return ($balance / 100 * $percent / 12);
    }

    public function getDep($sub_sum)
    {
        $this->dep += $sub_sum;
    }

    public function useDep(): float
    {
        return $this->dep;
    }

    public function getWit($sub_with)
    {
        $this->with += $sub_with;
    }

    public function useWith(): float
    {
        return $this->with;
    }

    public function getInt($sub_int)
    {
        $this->inte += $sub_int;
    }

    public function useInt(): float
    {
        return $this->inte;
    }


    public function money(): float
    {
        return $this->startingMoney;
    }

}