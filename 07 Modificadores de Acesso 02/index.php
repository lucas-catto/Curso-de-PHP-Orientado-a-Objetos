<?php

class Vehicle
{
    public $model;
    public $color;
    public $year;

    // private
    protected function run()
    {
        return 'run';
    }

    public function stop()
    {
        return 'stop';
    }

    /*
    public function showAction()
    {
        return $this->run();
    }
    */
}

class Car extends Vehicle
{
    public function specificMethod()
    {
        return 'specific method - Car';
    }

    public function showAction()
    {
        return $this->run();
    }
}

/*
$vehicle = new Vehicle();
echo $vehicle->showAction();
echo "\n\n";
*/

$car = new Car();
echo $car->showAction();
echo "\n\n";
