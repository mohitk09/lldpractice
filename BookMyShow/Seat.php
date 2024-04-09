<?php

namespace BookMyShow;

use enums\SeatCategory;

class Seat
{
    private int $seat_id;
    private int $row;
    private SeatCategory $seat_category;

    //Getter and setter methods

    public function getSeat()
    {
        return $this->seat_id;
    }

    public function getSeatCategory()
    {
        return $this->seat_category;
    }

    public function getRow()
    {
        return $this->row;
    }
}
