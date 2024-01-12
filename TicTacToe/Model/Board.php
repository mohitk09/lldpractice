<?php

namespace model;

class Board
{
    public int $size;

    /** @var array<array<PlayingPiece>>  */
    public array $board;

    public function __construct(int $size)
    {
        $this->size = $size;
        $this->board = array();
    }

    public function addPiece(int $row, int $col, PieceType $pieceType): bool
    {
        if ($this->board[$row][$col] !== null) {
            return false;
        }
        $this->board[$row][$col] = $pieceType;
        return true;
    }
}
