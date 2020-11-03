<?php

use App\Swap;
use App\Point;

require_once 'vendor/autoload.php';

$first = new Point(1, 2);
$second = new Point(3, 5);

$result = new Swap;

$result->swapPoints($first, $second);

echo "(" . $first->X() . ", " . $first->Y() . ")" . PHP_EOL;
echo "(" . $second->X() . ", " . $second->Y() . ")" . PHP_EOL;

