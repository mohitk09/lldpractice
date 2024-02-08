<?php

namespace Splitwise\Expense;

use Splitwise\Expense\Split\ExpenseSplit;
use Splitwise\User\User;

class Expense
{
    protected string $expense_id;
    protected string $description;
    protected float $amount;
    protected User $paid_by;
    protected ExpenseSplitType $split_type;

    /** @var array<Split> */
    protected $split_details;

    // getter and setters 
}
