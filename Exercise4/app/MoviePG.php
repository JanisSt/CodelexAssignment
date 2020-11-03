<?php

namespace App;

class MoviePG
{

    public function moviePG($film)
    {
        return array_filter($film, function ($movie) {
            return $movie->getRating() === 'PG';
        });
    }


}