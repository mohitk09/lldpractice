<?php

namespace VendingMachine;

enum Coin: int
{
    case Cent = 1;
    case Dollar = 100;

    public int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}
