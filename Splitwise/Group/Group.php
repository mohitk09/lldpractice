<?php

namespace Splitwise\Group;

use Splitwise\User\User;
use Splitwise\Expense\Expense;
use Splitwise\Expense\ExpenseController;

class Group
{
    public string $group_id;
    public string $group_name;
    /** @var array<User> */
    public $group_members;

    /** @var array<Expense> */
    public $expense_list;

    // will be used for creating an expense
    public ExpenseController $expense_controller;

    // getter and setter methods
}
