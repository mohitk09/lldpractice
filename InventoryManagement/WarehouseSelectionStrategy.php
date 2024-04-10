<?php

namespace InventoryManagement;

interface WarehouseSelectionStrategy
{
    public function selectWarehouse(): Warehouse;
}
