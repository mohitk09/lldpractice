<?php

class GameController
{
    public Board $board;

    public function __construct($size)
    {
        $this->board = new Board($size);
    }

    public function solveSudoku()
    {
        $this->board->solve();
    }
}
