<?php

namespace logic;

use model\User;
use model\Vehicle;

class UserService
{
    /** @var array<User> */
    public static $all_users = array();

    /** @var array<Vehicle> */
    public static $vehicles = array();

    public static function createUser(string $name, int $age, string $gender): User
    {
        $user = new User($name);
        array_push($all_users, $user);
        return $user;
    }

    public static function addVehicle(User $user, string $reg_no, string $owner): Vehicle
    {
        $vehicle = new Vehicle();
        $user->addVehicle($vehicle);
        array_push($vehicles, $vehicle);
        return $vehicle;
    }
};
