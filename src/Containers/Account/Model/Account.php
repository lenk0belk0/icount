<?php

namespace App\Containers\Account\Model;

class Account
{
    private const float DEFAULT_INITIAL_BALANCE = 0.00;
    
    public function __construct(
        private int $id,
        private string $title,
        private Currency $currency,
        private float $initialBalance = self::DEFAULT_INITIAL_BALANCE,
    ) {
    }

    public function __toString(): string
    {
        return sprintf("%s (%s)", $this->title, $this->currency);
    }
}
