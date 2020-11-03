<?php

namespace App;

class Product
{
    private string $name;
    private int $price;
    private int $amount;

    public function __construct(string $name, int $price, int $amount)
    {

        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->name;
    }

    public function getAmount(): int
    {
        return $this->name;
    }

    public function print_product(): string
    {
        return $this->name . ', price ' . $this->price * 2 . ', amount ' . $this->amount;
    }
}