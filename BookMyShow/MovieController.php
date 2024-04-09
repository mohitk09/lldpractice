<?php

namespace BookMyShow;

use enums\City;

class MovieController
{
    /** @var array<Movie> */
    private $all_movies = [];

    /** @var array<City, array<Movie>> */
    private $city_vs_movies = [];

    public function addMovie(Movie $movie, City $city): void
    {
        array_push($this->all_movies, $movie);
        array_push($this->city_vs_movies[$city], $movie);
    }

    public function getMovieByName(string $movie_name): Movie
    {
        foreach ($this->all_movies as $movie) {
            if ($movie->getMovieName() == $movie_name) {
                return $movie;
            }
        }
        return null;
    }
}
