<?php

require_once 'vendor/autoload.php';

use App\Product;


$Inventory = [
    $logitechMouse = new Product('Logitech mouse', 70.00, 14),
    $iPhone = new Product('iPhone 5s', 999.99, 3),
    $Epson = new Product("Epson EB-U05", 440.46, 1)];


foreach ($Inventory as $Prod) {
    echo $Prod->print_product() . PHP_EOL;
};

