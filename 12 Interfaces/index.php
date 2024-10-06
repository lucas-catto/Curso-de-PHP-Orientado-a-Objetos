<?php

interface Crud
{
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Notices implements Crud
{
    public function create($data)
    {
        return 'create';
    }

    public function read()
    {
        return 'read';
    }

    public function update()
    {
        return 'update';
    }

    public function delete()
    {
        return 'delete';
    }
}
