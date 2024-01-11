<?php

namespace Decorator;

class Margherita extends BasePizza
{
    public function getCost(): int
    {
        return 120;
    }
}
