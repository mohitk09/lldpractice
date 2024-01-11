<?php

namespace Decorator;

class Main
{
    public function main(): void
    {
        $customPizza = new Olives(new Margherita());
        echo $customPizza->getCost();
    }
}
