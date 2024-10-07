<?php

class Person
{
    public $age;

    public function __clone()
    {
        echo 'clone';
    }
}

$person = new Person;
$person->age = 5;

$person2 = clone $person;
$person2->age = 87;

// echo $person->age;
echo $person2->age;
