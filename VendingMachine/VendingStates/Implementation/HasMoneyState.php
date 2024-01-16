<?php

namespace VendingStates;

use Exception;
use VendingMachine\Coin;
use VendingMachine\VendingMachine;
use VendingMachine\Item;

class HasMoneyState implements State
{
    public function clickOnInsertCoinButton(VendingMachine $machine): void
    {
    }

    public function insertCoin(VendingMachine $machine, Coin $coin)
    {
        print_r('Coin accepted');
        $machine->state = new ProductSelection();
    }

    public function clickOnStartProductSelectionButton(VendingMachine $machine)
    {
    }

    public function chooseProduct(VendingMachine $machine, int $codeNumber)
    {
    }

    public function getChange(int $returnChangeMoney): int
    {
        return 5;
    }

    public function dispenseProduct(VendingMachine $machine, int $codeNumber): Item
    {
        throw new Exception('Cannot dispense product yet');
    }

    public function refundFullMoney(VendingMachine $machine)
    {
    }

    public function updateInventory(VendingMachine $machine, Item $item, int $codeNumber): void
    {
    }
}
