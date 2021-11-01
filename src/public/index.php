<?php

declare(strict_types=1);
// phpinfo();

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

require_once "../Transactions.php";


$transaction = (new Transaction(100, "Transaction 1"))
  ->addTax(8)
  ->applyDiscount(3);

$amount = $transaction->getAmount();


// how to destroy an object, calling destructor
// use it only when you have an actual use-case for that
// example: database connection
// unset($transaction);
// $transaction = null;

echo '<pre>';
var_dump($transaction);
var_dump($amount);
echo '</pre>';