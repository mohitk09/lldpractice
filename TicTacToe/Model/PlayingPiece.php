<?php

namespace model;

class PlayingPiece
{
    public PieceType $pieceType;

    public function __construct(PieceType $pieceType)
    {
        $this->pieceType = $pieceType;
    }
}
