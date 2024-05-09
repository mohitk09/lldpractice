<?php

namespace SnakeAndLadder;

class Player
{
    private string $name;
    private string $id;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->id = rand(1, 1000); // for now generate ID like this
    }

    public function getName()
    {
        return $this->name;
    }

    public function getID()
    {
        return $this->id;
    }
}
