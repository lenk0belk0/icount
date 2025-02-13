<?php

namespace App\Containers\Account\Model;

class Currency
{
    private const string DEFAULT_SYMBOL_RIGHT_FORMAT = '{{amount}} {{symbol}}';

    public function __construct(
        private int $id,
        private string $symbol,
        private string $format = self::DEFAULT_SYMBOL_RIGHT_FORMAT,
    ) {}
}
