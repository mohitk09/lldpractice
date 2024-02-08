<?php

namespace Splitwise\Expense\Split;

interface ExpenseSplit
{
    public function validateSplit($split_list, float $total_amount): void;
}
