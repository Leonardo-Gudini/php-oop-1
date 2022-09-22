<?php
require_once __DIR__ . '/movie.php';

$movie1 = new movie("2001: Odissea nello spazio", "1968", "Stanley Kubrik", "10.500.000");
$movie1->getYearFromExit();
$movie1 -> getFullInfo();

$movie2 = new movie("Ritorno al Futuro", "1985", "Robert Zemeckis", "19.000.000");
$movie2->getYearFromExit();
$movie2->getFullInfo();

// echo $movie2->$cost;
