<?php

include 'Car.php';
include 'ChildCar.php';

$car = new Car('BMW', 180);
$car->start();
$car->up(170);

echo PHP_EOL . '--------------------------------------------------------------------------------------' . PHP_EOL;

$cars = [
    new Car('Audi', 220),
    new Car('BMW', 240),
];

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