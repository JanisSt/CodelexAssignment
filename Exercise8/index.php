<?php

require_once 'vendor/autoload.php';

use App\SavingsAccount;


$start = readline('Balance at start: ');
$interest = readline('Yearly interest rate: ');
$months = readline('Time in months since account was created: ');

$account = new SavingsAccount($start, $interest);
$balance = $start;
for ($i = 1; $i <= $months; $i++) {
    $deposit = readline('Enter amount deposited for month ' . $i . ' : ');
    $balance += ($account->add($deposit));
    $account->getDep($deposit);

    $withdrawn = readline('Enter amount withdrawn for month ' . $i . ' : ');
    $balance += $account->subtract($withdrawn);
    $account->getWit($withdrawn);


    $percent = $account->interest($balance, $interest);
    $balance = $balance + $percent;
    $account->getInt($percent);
}
echo 'Total deposited: $' . $account->useDep() . PHP_EOL;
echo 'Total withdrawn: $' . $account->useWith() . PHP_EOL;
echo 'Interest earned: $' . round($account->useInt(), 2) . PHP_EOL;

echo 'Ending balance: $' . round($balance, 2) . PHP_EOL;