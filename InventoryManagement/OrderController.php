<?php

namespace InventoryManagement;

class OrderController
{
    /** @var array<Order> */
    private $order_list;

    /** @var array<int, array<Order>> */
    private $user_id_vs_orders;
}
