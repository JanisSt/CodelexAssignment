<?php

require_once 'vendor/autoload.php';

use App\Date;

$date = new Date(15, 5, 2000);

$date->setDay(1);
$date->setMonth(13);
$date->setYear(2066);


if ($date->DateTest() == true) {
    echo $date->DisplayDate();
} else echo 'No such date exists';
echo PHP_EOL;
