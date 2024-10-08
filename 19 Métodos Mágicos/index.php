<?php

function show($line) {
    echo "<p>".$line."</p>";
}

/*
class Person
{
    private $name;

    public function __set($name, $value)
    {
        $this->name = $value;
    }

    public function __get($name)
    {
        return $this->name;
    }
}

$person = new Person;
$person->name = 'James';

// var_dump($person);

show($person->name);
*/

class Person
{
    private $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __tostring()
    {
        return 'object cannot be shown';
    }

    public function __invoke()
    {
        return 'object as function';
    }
}

$person = new Person;

$person->name = 'Arnold';
$person->age = 77;
$person->genre = 'M';

/*
show($person->name);
show($person->age);
show($person->genre);
*/

show($person);
show($person());
