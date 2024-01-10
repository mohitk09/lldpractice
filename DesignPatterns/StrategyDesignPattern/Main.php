<?php

namespace StrategyDesignPattern;

class Main
{
    public static function main(): void
    {
        $vehicle = new OffRoadVehicle();
        $vehicle->drive();
    }
};
