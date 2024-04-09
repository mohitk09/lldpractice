<?php

namespace BookMyShow;

class Main
{

    public MovieController $movie_controller;
    public TheatreController $theatre_controller;


    public function __construct()
    {
        $this->movie_controller = new MovieController();
        $this->theatre_controller = new TheatreController();
    }

    public static function main(): void
    {
    }
}
