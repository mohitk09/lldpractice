<?php

namespace NullObject;

// Induding the default behaviour
class NullObject implements Vehicle
{
    public function getSeatingCapacity(): int
    {
        return 0;
    }

    public function getTankCapacity(): int
    {
        return 0;
    }
}
