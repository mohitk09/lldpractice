<?php

namespace InventoryManagement;

use OrderStatus;

class Order
{
    private User $user;
    private Warehouse $warehouse;
    private OrderStatus $order_status;

    /** @var array<int, int> */
    private $product_category_count_map;
}
