<?php

namespace Cricbuzz\Team\Player;

class PlayerBowlingController
{
    public array $bowlerList;
    public PlayerDetail $currentBowler;
    public array $bowlersVsOverCount;

    public function __construct(array $bowlerList)
    {
        $this->bowlerList = $bowlerList;
    }
}
