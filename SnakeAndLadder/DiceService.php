<?php

namespace SnakeAndLadder;

class DiceService
{
    public static function rollDice(): int
    {
        return rand(1, 6);
    }
}
