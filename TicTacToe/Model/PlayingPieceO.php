<?php

namespace model;

class PlayingPieceO extends PlayingPiece
{
    public function __construct()
    {
        parent::__construct(PieceType::O);
    }
}
