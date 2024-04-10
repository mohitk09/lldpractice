<?php

use InventoryManagement\Warehouse;
use InventoryManagement\WarehouseSelectionStrategy;

class NearestWarehouseSelectionStrategy implements WarehouseSelectionStrategy
{
    public function selectWarehouse(): Warehouse
    {
        return new Warehouse();
    }
}
