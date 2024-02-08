<?php

namespace Splitwise\User;

use Splitwise\UserExpenseBalanceSheet;

class User
{
    protected string $id;
    protected string $user_name;
    protected UserExpenseBalanceSheet $user_expense_balance_sheet;

    public function getUserID(): string
    {
        return $this->id;
    }
}
