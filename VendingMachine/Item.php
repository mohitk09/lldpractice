<?php

namespace VendingMachine;

class Item
{
    private ItemType $type;
    private int $cost;

    public function __construct(ItemType $type, int $cost)
    {
        $this->type = $type;
        $this->cost = $cost;
    }

    public function getCost(): int
    {
        return $this->cost;
    }

    public function getType(): ItemType
    {
        return $this->type;
    }

    public function setCost(int $cost): void
    {
        $this->cost = $cost;
    }

    public function setType(ItemType $type): void
    {
        $this->type = $type;
    }
}
