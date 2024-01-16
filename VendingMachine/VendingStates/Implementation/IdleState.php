<?php

namespace VendingStates;

use Exception;
use VendingMachine\Coin;
use VendingMachine\Item;
use VendingMachine\VendingMachine;

class IdleState implements State
{

    public function __construct(VendingMachine $machine)
    {
        print_r('Machine is in idle state');
        $machine->coins = array();
    }

    public function clickOnInsertCoinButton(VendingMachine $machine): void
    {
        $machine->state = new HasMoneyState();
    }

    public function insertCoin(VendingMachine $machine, Coin $coin)
    {
        throw new Exception('Coin cannot be inserted in idle state');
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
        throw new Exception('Cannot dispense production in idle state');
    }

    public function refundFullMoney(VendingMachine $machine)
    {
    }

    public function updateInventory(VendingMachine $machine, Item $item, int $codeNumber): void
    {
        $machine->inventory->addItem($item, $codeNumber);
    }
}
