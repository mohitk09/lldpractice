<?php

namespace model;

class PlayingPieceX extends PlayingPiece
{
    public function __construct()
    {
        parent::__construct(PieceType::X);
    }
}
