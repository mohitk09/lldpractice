<?php

namespace SnakeAndLadder\SpecialEntity;

class Ladder implements SpecialEntity
{

    private int $start;
    private int $end;

    public function getStartPoint(): int
    {
        return $this->start;
    }

    public function getEndPoint(): int
    {
        return $this->end;
    }
}
