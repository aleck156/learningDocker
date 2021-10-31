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
echo '<pre>';
var_dump($transaction);
echo '</pre>';