<?php

namespace App;

class Swap
{
    public function swapPoints(&$a, &$b)
    {
        $holder = $a;
        $a = $b;
        $b = $holder;
    }
}