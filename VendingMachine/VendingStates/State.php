<?php

namespace VendingStates;

use VendingMachine\VendingMachine;
use VendingMachine\Coin;
use VendingMachine\Item;

interface State
{
    public function clickOnInsertCoinButton(VendingMachine $machine): void;

    public function insertCoin(VendingMachine $machine, Coin $coin);

    public function clickOnStartProductSelectionButton(VendingMachine $machine);

    public function chooseProduct(VendingMachine $machine, int $codeNumber);

    public function getChange(int $returnChangeMoney): int;

    public function dispenseProduct(VendingMachine $machine, int $codeNumber): Item;

    /** @return array<Coin> */
    public function refundFullMoney(VendingMachine $machine);

    public function updateInventory(VendingMachine $machine, Item $item, int $codeNumber): void;
}
