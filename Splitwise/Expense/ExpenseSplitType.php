<?php

namespace Splitwise\Expense;

enum ExpenseSplitType
{
    case Equal;
    case Percentage;
    case Weighted;
}
