<?php

namespace logic;

use model\User;
use model\Ride;


class RideService
{
    /** @var array<Ride> */
    public static $all_offers = array();

    /** @var array<User, array<Ride>> */
    public static $all_rides_taken = array();

    function myCustomCompartor(Ride $a, Ride $b)
    {
        return $a->getRideDuration() < $b->getRideDuration();
    }


    public static function selectRideService(): ?Ride
    {
        usort($all_offers, "myCustomCompartor");
        return null;
    }
};
