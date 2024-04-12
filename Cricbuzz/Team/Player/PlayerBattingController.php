<?php

namespace Cricbuzz\Team\Player;

use SplQueue;

class PlayerBattingController
{
    public SplQueue $yetToPlay;
    public PlayerDetail $striker;
    public PlayerDetail $nonStriker;
}
