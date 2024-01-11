<?php

namespace Decorator;

class FarmHousePizza extends BasePizza
{
    public function getCost(): int
    {
        return 450;
    }
}
