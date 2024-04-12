<?php

namespace Cricbuzz\Team\Player;

use Cricbuzz\Team\Player\Score\BattingScorecard;

class PlayerDetail
{
    public Person $person;
    public PlayerType $playerType;
    public BattingScorecard $battingScoreCard;
}
