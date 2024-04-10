<?php

namespace InventoryManagement;

class Inventory
{
    /** @var array<ProductCategory> */
    private $product_categories;

    public function __construct()
    {
        $this->product_categories = [];
    }

    public function addCategory(): void
    {
    }
}
