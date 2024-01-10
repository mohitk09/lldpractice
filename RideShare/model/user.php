<?php

namespace model;

class User
{
    private string $ids;
    private string $name;
    private string $gender;
    private int $age;
    /** @var array<Vehicle> */
    private $vechiles;
    private int $ridetaken;
    private int $rideOffered;

    public function __construct(string $name)
    {
        $this->ids = 'Generate a random UUID';
        $this->name  = $name;
        // init other properties;
    }

    public function addVehicle(Vehicle $v)
    {
        array_push($vechiles, $v);
    }

    /**
     * @return array<Vehicle> 
     */
    public function getVehicle()
    {
        $this->vechiles;
    }
};
