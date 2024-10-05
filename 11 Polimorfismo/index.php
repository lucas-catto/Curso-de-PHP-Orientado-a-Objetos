<?php

class Animal
{
    public function Walk()
    {
        return 'animal - walk';
    }

    public function Run()
    {
        return 'animal - run';
    }
}

class Horse extends Animal
{
    /*
    public function Walk()
    {
        return 'horse - walk';
    }
    */

    public function Walk()
    {
        return $this->Run();
    }
}

$horse = new Horse;
echo $horse->Walk();
