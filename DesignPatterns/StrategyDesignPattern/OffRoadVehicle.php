<?php

namespace StrategyDesignPattern;

use Strategy\SportDriveStrategy;

class OffRoadVehicle extends Vehicle
{
    public function __construct()
    {
        parent::__construct(new SportDriveStrategy());
    }
};
