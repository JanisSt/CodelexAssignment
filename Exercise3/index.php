<?php

require_once 'vendor/autoload.php';

use App\FuelGauge;
use App\Odometer;

$Od = new Odometer(0, 999999);
$FG = new FuelGauge(0, 70);

while ($FG->getNow() < $FG->getFull()) {
    $FG->getFill();
    echo 'Current status of gas tank: ' . $FG->getNow() . ' out of: ' . $FG->getFull() . PHP_EOL;
}
echo 'Gas Tank full, lets drive!!!' . PHP_EOL;

while ($FG->getNow() > 0) {
    $Od->checkMaxMileage();
    echo 'Cars Current Mileage is: ' . $Od->currentMileage() . ' Km, Current Gas tank: ' .
        $FG->getNow() . ' Liters ' . PHP_EOL;
    if ($Od->currentMileage() % 10 === 0) {
        $FG->spend();
    }
}





