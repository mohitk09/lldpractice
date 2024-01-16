<?php

namespace VendingMachine;

class ItemShelf
{
    // These variables will be private in an actual codeabase and will have setter and getter methods
    public int $code;
    public Item $item;
    public bool $isAvailable;
}
