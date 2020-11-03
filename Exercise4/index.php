<?php

require_once 'vendor/autoload.php';

use App\Movie;
use App\MoviePG;

$movies = [
    $movie = new Movie('Casino Royale', 'Eon Productions', 'PG­13'),
    $movie2 = new Movie('Glass', 'Buena Vista International', 'PG­13'),
    $movie3 = new Movie(
        'Spider-Man: Into the Spider-Verse',
        'Columbia Pictures',
        'PG')
];

$pg = new MoviePG();
var_dump(($pg->moviePG($movies)));


