<?php

namespace Decorator;

use Decorator\BasePizza;

class Olives extends ToppingDecorator
{
    /** @var BasePizza */
    public $basePizza;

    public function __construct(BasePizza $basePizza)
    {
        $this->basePizza = $basePizza;
    }

    public function getCost(): int
    {
        return $this->basePizza->getCost() + 70;
    }
}
