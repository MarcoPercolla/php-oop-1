<?php
require __DIR__ . "/Models/Movie.php";

$Il_Signore_degli_anelli = new Movie("Il Signore degli Anelli","2001","epico", "New Zeland", "2h42min");

echo $Il_Signore_degli_anelli->getMovieData();