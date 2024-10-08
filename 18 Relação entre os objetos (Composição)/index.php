<?php

class Person
{
    public function setName($name)
    {
        return $name;        
    }
}

class Show
{
    public $person;
    public $name;

    function __construct($name)
    {
        $this->person = new Person;
        $this->name = $name;
    }

    public function showName()
    {
        return $this->person->setName(
            $this->name
        );
    }
}

$show = new Show("Nikola");
echo $show->showName();
