<?php

namespace InventoryManagement;

class User
{
    private int $user_id;
    private string $user_name;
    private string $address;
    private Cart $user_cart_details;

    /** @var array<int> */
    private $order_ids;

    public function __construct()
    {
        $user_cart_details = new Cart();
    }
}
