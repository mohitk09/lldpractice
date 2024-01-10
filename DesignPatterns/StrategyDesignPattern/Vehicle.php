<?php

namespace StrategyDesignPattern;

use Strategy\DriveStrategy;

class Vehicle
{
    public DriveStrategy $driveObj;

    public function __construct(DriveStrategy $driveObj)
    {
        $this->driveObj = $driveObj;
    }

    public function drive(): void
    {
        $this->driveObj->drive();
    }
};
