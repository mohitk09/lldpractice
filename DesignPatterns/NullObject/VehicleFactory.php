<?php

namespace NullObject;

class VehicleFactory
{
    public static function getVehicleObj(string $type): Vehicle
    {
        switch ($type) {
            case 'Car':
                return new Car();
        }
        return new NullObject();
    }
}
