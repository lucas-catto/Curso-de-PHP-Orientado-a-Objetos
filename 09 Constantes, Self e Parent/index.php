<?php

/*
class Person
{
    const name = "steve";

    public function showName()
    {
        return self::name;
    }
}

$person = new Person;
echo $person->showName();
*/

class Person
{
    const name = "steve";

    public function showName()
    {
        return self::name;
    }
}

class Steve extends Person
{
    const name = "jobs";

    public function showName()
    {
        // return self::name;
        return parent::name;
    }
}

$steve = new Steve;
echo $steve->showName();
