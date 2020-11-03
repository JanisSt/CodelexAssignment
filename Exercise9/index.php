<?php

require_once 'vendor/autoload.php';

use App\BankAccount;

$account = new BankAccount('Benson', -17.25);

if ($account->getBalance() >= 0) {
    echo $account->show_user_name_and_balance('') . PHP_EOL;
} elseif ($account->getBalance() < 0) {
    echo $account->show_user_name_and_balance('-') . PHP_EOL;

}
