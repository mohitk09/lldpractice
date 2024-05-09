<?php

namespace SnakeAndLadder;

use SnakeAndLadder\SpecialEntity\Snake;

class Board
{
    private int $size;

    /** @var array<Snake> */
    private array $snakes;

    /** @var array<Ladder> */
    private array $ladders;

    /** @var array<string, int> */
    private array $player_pieces;

    public function __construct(int $size)
    {
        $this->size = $size;
        $this->snakes = array();
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getSnakes()
    {
        return $this->snakes;
    }

    public function getLadders()
    {
        return $this->ladders;
    }

    public function getPlayingPieces()
    {
        return $this->player_pieces;
    }
}
