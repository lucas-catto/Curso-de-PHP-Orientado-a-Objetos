<?php

/*
class Vehicle
{
    protected $model;
    public $color;
    public $year;

    // SET
    public function setModel($model)
    {
        $this->model = $model;
    }

    // GET
    public function getModel()
    {
        return $this->model;
    }

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

$vehicle = new Vehicle;
$vehicle->setModel('Cybertruck');
echo $vehicle->getModel();
*/

class Vehicle
{
    private $model;
    public $color;
    public $year;

    // SET
    public function setModel($model)
    {
        $this->model = $model;
    }

    // GET
    public function getModel()
    {
        return $this->model;
    }

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
$car->setModel('Cybertruck');
echo $car->getModel();

echo '<pre>';
var_dump($car);
echo '</pre>';
