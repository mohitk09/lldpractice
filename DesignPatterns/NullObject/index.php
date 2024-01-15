<?php

namespace NullObject;

use NullObject\VehicleFactory;

class Main
{
    public static function main(): void
    {
        $vehicle = VehicleFactory::getVehicleObj("Car");

        // No requirement of null check now
        print_r($vehicle->getTankCapacity());
    }
}
