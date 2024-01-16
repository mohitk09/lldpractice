<?php

namespace VendingMachine;

use VendingStates\State;

class VendingMachine
{
    // These variables will be private in an actual codeabase and will have setter and getter methods
    public State $state;
    public Inventory $inventory;

    /** @var array<Coin> */
    public $coins;

    public function __construct()
    {
    }
}
