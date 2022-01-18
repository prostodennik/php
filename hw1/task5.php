<?php

$bmw = [
    'model' => 'X5',
    'speed' => 200,
    'doors' => 5,
    'year' => 2022
];

$toyota = [
    'model' => 'Camry',
    'speed' => 190,
    'doors' => 5,
    'year' => 2021
];

$opel = [
    'model' => 'Astrs',
    'speed' => 180,
    'doors' => 3,
    'year' => 2020
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

foreach ($cars as $name => $car) {
    echo "CAR $name<br>";
    echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['year']}<br><br>";

}