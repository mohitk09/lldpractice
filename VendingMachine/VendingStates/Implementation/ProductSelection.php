<?php

namespace VendingStates;

use VendingMachine\VendingMachine;

class ProductSelection implements State
{

    public function chooseProduct(VendingMachine $machine, int $codeNumber): void
    {
        $item = $machine->inventory->getItem($codeNumber);

        $amount_paid = 0;
        foreach ($machine->coins as $coin) {
            $amount_paid += $coin->value;
        }

        if ($amount_paid < $item->getCost()) {
            print_r('less amount paid');
            $this->refundFullMoney($machine);
        } else {
            if ($amount_paid > $item->getCost()) {
                $this->getChange($amount_paid - $item->getCost());
            }
            $machine->state = new Dispense($machine, $codeNumber);
        }
    }
}
