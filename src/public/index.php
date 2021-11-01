<?php

declare(strict_types=1);

/*
// phpinfo();

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

require_once "../PaymentProfile.php";
require_once "../Customer.php";
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

$transaction->customer = new Customer();

echo $transaction->customer?->paymentProfile->id;

// null coalesce opeator ?? does not work with methods
// throws an error when a method doesn't exist
// whereas with values, it just picks the second one

echo '<pre>';
var_dump($transaction);
var_dump($amount);
echo '</pre>';
*/