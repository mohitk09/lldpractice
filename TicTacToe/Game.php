<?php

namespace TicTacToe;

use model\Board;
use model\Player;
use model\PlayingPieceX;
use model\PlayingPieceO;
use SplQueue;

class Game
{

    public SplQueue $players;
    public Board $gameBoard;

    public function initGame(): void
    {
        $this->players = new SplQueue();

        $crossPiece = new PlayingPieceX();
        $player1 = new Player("Mohit", $crossPiece);

        $oPiece = new PlayingPieceO();
        $player2 = new Player("Scarlet", $oPiece);

        $this->players->push($player1);
        $this->players->push($player2);
    }

    public function startGame(): string
    {
        return "something";
    }
}
