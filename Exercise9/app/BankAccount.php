<?php

namespace App;

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {

        $this->name = $name;
        $this->balance = $balance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    function show_user_name_and_balance($sym)
    {
        return ($this->name . ', ' . $sym . '$' . round(abs($this->balance), 2));
    }
}