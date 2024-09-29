<?php

class Person
{
    public $name;
    public $age;

    public function speak()
    {
        echo "{$this->name} is {$this->age} years old and speaked.";
    }
}

$person = new Person;

$person->name = "Steve Paul Jobs";
$person->age = "69";

// echo $person->name;
// echo $person->age;

$person->speak();

// var_dump($person);
