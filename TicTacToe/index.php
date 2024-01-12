<?php

namespace TicTacToe;

class Main
{
    public static function Main(): void
    {
        $game = new Game();
        $game->initGame();
        print_r("winner is", $game->startGame());
    }
}
