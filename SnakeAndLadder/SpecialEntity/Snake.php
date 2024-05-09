<?php

namespace SnakeAndLadder\SpecialEntity;

class Snake implements SpecialEntity
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
