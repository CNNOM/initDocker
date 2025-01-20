<?php

require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGeteway\Paddle\Transaction;

$paddleTransaction = new Transaction(25);

//$id = new \Ramsey\Uuid\UuidFactory();
//
//echo $id->uuid4();

//var_dump($paddleTransaction);

var_dump($paddleTransaction->getStatus());



var_dump(Transaction::class);


