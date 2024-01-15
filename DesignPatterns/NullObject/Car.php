<?php

namespace NullObject;

class Car implements Vehicle
{
    public function getTankCapacity(): int
    {
        return 65;
    }

    public function getSeatingCapacity(): int
    {
        return 5;
    }
}
