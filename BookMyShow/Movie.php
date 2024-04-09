<?php

namespace BookMyShow;


class Movie
{
    private int $movie_id;
    private string $movie_name;
    private int $movie_duration;

    // Metadata, could be genre, language

    public function getMovieName()
    {
        return $this->movie_name;
    }

    public function getMovieDuration()
    {
        return $this->movie_duration;
    }

    public function getMovieID()
    {
        return $this->movie_id;
    }
}
