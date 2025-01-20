<?php

declare(strict_types=1);

namespace App\PaymentGeteway\Paddle;

class Transaction{

    private int $amount;

    public function __construct(int $amount)
    {

        $this->amount = $amount;
    }

    public function getStatus(): int
    {
        return $this->amount;
    }


}