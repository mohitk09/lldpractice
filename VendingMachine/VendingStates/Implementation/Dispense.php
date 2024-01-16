<?php

namespace VendingStates;

use VendingMachine\Item;
use VendingMachine\VendingMachine;

class Dispense implements State
{
    public function __construct(VendingMachine $vendingMachine, int $code)
    {
        $this->dispenseProduct($vendingMachine, $code);
    }

    public function dispenseProduct(VendingMachine $machine, int $codeNumber): Item
    {
        print_r('dispensing product');
        $item = $machine->inventory->getItem($codeNumber);
        // update sold out item
        $machine->state = new IdleState($machine);
        return $item;
    }
}
