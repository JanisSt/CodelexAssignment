<?php

require_once 'vendor/autoload.php';

use App\Customer;

$customer = new Customer(12467, 0.14, 0.64);

echo "Total number of people surveyed " . $customer->getSurveyed() . PHP_EOL;
echo "Approximately " . $customer->calculate_energy_drinkers() . " bought at least one energy drink" . PHP_EOL;
echo $customer->calculate_prefer_citrus() . " of those " . "prefer citrus flavored energy drinks." . PHP_EOL;
