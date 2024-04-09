<?php

namespace BookMyShow;

class Show
{
    private int $show_id;
    private Movie $movie;
    private Screen $screen;
    private int $show_start_time;

    /** @var array<int, int> */
    private $booked_seats = [];


    public function getMovie()
    {
        return $this->movie;
    }

    public function setMovie(Movie $movie)
    {
        $this->movie = $movie;
    }
}
