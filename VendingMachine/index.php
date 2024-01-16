<?php

namespace VendingMachine;

class Main
{
    public static function main(): void
    {
        $vendingMachine = new VendingMachine();

        $currentState = $vendingMachine->state;
        $currentState->clickOnInsertCoinButton($vendingMachine);

        $currentState->insertCoin($vendingMachine, Coin::Cent);
        $currentState->insertCoin($vendingMachine, Coin::Dollar);

        $currentState->chooseProduct($vendingMachine, 102);
    }
}
