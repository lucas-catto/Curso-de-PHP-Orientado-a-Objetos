<?php

class Vehicle
{
    public $model;
    public $color;
    public $year;

    public function run()
    {
        return 'run';
    }

    public function stop()
    {
        return 'stop';
    }
}

class Car extends Vehicle
{
    public function specificMethod()
    {
        return 'specific method - Car';
    }
}

class Motorcycle extends Vehicle
{
    public function specificMethod()
    {
        return 'specific method - Motorcycle';
    }
}

$car = new Car;

$car->model = 'Cybertruck';
$car->color = 'gray';
$car->year = 2024;

echo '<p>'. $car->run() .'</p>';
echo '<p>'. $car->stop() .'</p>';
echo '<p>'. $car->specificMethod() .'</p>';

echo '<pre>';
var_dump($car);
echo '</pre>';

$motorcycle = new Motorcycle;

$motorcycle->model = 'S1000RR';
$motorcycle->color = 'blue';
$motorcycle->year = 2024;

echo '<p>'. $motorcycle->run() .'</p>';
echo '<p>'. $motorcycle->stop() .'</p>';
echo '<p>'. $motorcycle->specificMethod() .'</p>';

echo '<pre>';
var_dump($motorcycle);
echo '</pre>';
