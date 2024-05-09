<?php

namespace SnakeAndLadder;

use SplQueue;

class GameService
{
    private Board $board;
    private int $number_of_players;
    private SplQueue $players;

    private bool $is_game_completed;

    const DEFAULT_BOARD_SIZE = 100;


    public function __construct(int $board_size = self::DEFAULT_BOARD_SIZE)
    {
        $this->board = new Board($board_size);
        $this->players = new SplQueue();
    }

    public function computeNewPosition(int $new_position)
    {
        $prev_position = 0;
        do {

            $prev_position = $new_position;

            foreach ($this->board->getSnakes() as $snake) {
                if ($snake->getStartPoint() === $new_position) {
                    $new_position = $snake->getEndPoint();
                }
            }

            foreach ($this->board->getLadders() as $ladder) {
                if ($ladder->getStartPoint() === $new_position) {
                    $new_position = $ladder->getEndPoint();
                }
            }
        } while ($prev_position !== $new_position);

        return $new_position;
    }

    private function movePlayer(Player $player, int $positions): void
    {
        $old_position = $this->board->getPlayingPieces()[$player->getID()];

        $new_position = $old_position + $positions;

        if ($new_position > $this->board->getSize()) {
            $new_position = $old_position;
        }

        $new_position = $this->computeNewPosition($new_position);
    }

    public function startGame()
    {
        while (!$this->is_game_completed) {
            $dice_value = DiceService::rollDice();
            $current_player = $this->players->top();
            $this->players->pop();
            $this->movePlayer($current_player, $dice_value);

            // check is player has won, if not push in the queue again
        }
    }
}
