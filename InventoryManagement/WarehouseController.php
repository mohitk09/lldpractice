<?php

namespace InventoryManagement;

class WarehouseController
{

    /** @var array<Warehouse> */
    private $warehouses;

    private WarehouseSelectionStrategy $warehouse_selection_strategy;


    public function __construct(WarehouseSelectionStrategy $warehouse_selection_strategy)
    {
        $this->warehouse_selection_strategy = $warehouse_selection_strategy;
    }

    public function addWarehouse(): void
    {
    }

    public function removeWarehouse(): void
    {
    }
}
