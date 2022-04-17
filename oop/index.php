<?php

include 'ChildCar.php';
include 'SmallChild.php';

echo PHP_EOL . '--------------------------------------------------------------------------------------' . PHP_EOL;

$cars = [
    new SmallChild('Audi', 220, 'car for big boys', 'not fast not it\'s good'),
    new SmallChild('BMW', 240, 'car for big boys', 'not fast not it\'s good'),
];
//
foreach ($cars as $car) {
    $car->start();
    $car->up(150);
    $car->down(10);
    $car->up(200);
    $car->stop();
}
echo '--------------------------------------------------------------------------------------' . PHP_EOL;

$children_cars = [
    new ChildCar('DAF', 130, 'track', 'slow'),
    new ChildCar('Ferrari', 350, 'supercar', 'very fast'),
    new ChildCar('VW Beatle', 100, 'old car', 'very slow'),
];

foreach ($children_cars as $car) {
    $car->start();
    $car->up(90);
    $car->down(3);
    $car->up(140);
    $car->stop();
}
echo '--------------------------------------------------------------------------------------' . PHP_EOL;