<?php

declare(strict_types=1);
// phpinfo();

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

require_once "../Transactions.php";


$transaction = new Transaction(15, "Transaction 1");
echo '<pre>';
var_dump($transaction);
echo '</pre>';