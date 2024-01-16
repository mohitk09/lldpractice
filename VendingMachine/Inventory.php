<?php

namespace VendingMachine;

use Exception;
use SplFixedArray;

class Inventory
{
    /** @var array<ItemShelf> */
    public $inventory = [];

    public function __construct(int $count)
    {
        $this->inventory = new SplFixedArray($count);
        $this->initialEmptyInventory();
    }

    public function initialEmptyInventory(): void
    {
        $startCode = 101;
        for ($i = 0; $i < count($this->inventory); $i++) {
            $itemShelf = new ItemShelf();
            $itemShelf->code = $startCode;
            $itemShelf->isAvailable = false;
            $this->inventory[$i] = $itemShelf;
            $startCode++;
        }
    }

    public function addItem(Item $item, int $code): void
    {
        foreach ($this->inventory as $itemShelf) {
            if ($itemShelf->code === $code) {
                if ($itemShelf->isAvailable === false) {
                    $itemShelf->isAvailable = true;
                    $itemShelf->item = $item;
                } else {
                    throw new Exception('Item is already present');
                }
            }
        }
    }

    public function getItem(int $code): Item
    {
        foreach ($this->inventory as $itemShelf) {
            if ($itemShelf->code === $code && $itemShelf->isAvailable === true) {
                return $itemShelf->item;
            }
        }
        throw new Exception('Invalid code');
    }

    public function updateSoldItem(int $code): void
    {
        foreach ($this->inventory as $itemShelf) {
            if ($itemShelf->code == $code) {
                $itemShelf->isAvailable = false;
            }
        }
    }
}
