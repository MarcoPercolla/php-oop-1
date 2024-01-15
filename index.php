<?php
require __DIR__ . "/Models/Movie.php";
require __DIR__ . '/films.php';

function getAll($array) {


    foreach ($array as $film) {
        echo $film->getMovieData();
     }

}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Selection</title>
</head>
<body>
    <h1>Movies</h1>
    <div>
        <?= $movies[1]->getMovieData() ?>
        <?= getAll($movies); ?>

    </div>
    
</body>
</html>
