<?php

namespace model;

use DateTime;

class Ride
{
    private User $user;
    private Vehicle $vechile;
    private int $available_seats;
    private string $origin;
    private string $destination;
    private DateTime $startTime;
    private int $ride_duration;

    public function __construct(
        User $user,
        Vehicle $vechile,
        int $seats,
        string $origin,
        string $destination,
        DateTime $startTime,
        int $duration
    ) {
        $this->user = $user;
        $this->vechile = $vechile;
        $this->available_seats = $seats;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->startTime = $startTime;
        $this->ride_duration = $duration;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getVechile()
    {
        return $this->vechile;
    }
}
