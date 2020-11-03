<?php

namespace App;

class Point
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {

        $this->x = $x;
        $this->y = $y;
    }

    public function X()
    {
        return $this->x;
    }

    public function Y()
    {
        return $this->y;
    }
}