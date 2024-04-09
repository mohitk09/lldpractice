<?php

namespace BookMyShow;

class Booking
{
    private Show $show;
    private Payment $payment;

    /** @var array<Seat> */
    private $booked_seats = [];
}
