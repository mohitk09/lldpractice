<?php

namespace Cricbuzz\inning;

use Cricbuzz\Team\Player\PlayerDetail;
use Cricbuzz\ScoreUpdater\ScoreUpdater;

class BallDetails
{
    public int $ballNumber;
    public PlayerDetail $playedBy;
    public PlayerDetail $bowledBy;

    /** @var array<ScoreUpdater> */
    public $scoreUpdaterObserverList;

    public function startDelievery()
    {
        $this->notifyUser($this);
    }

    public function notifyUser(BallDetails $ballDetails)
    {
        foreach ($this->scoreUpdaterObserverList as $observer) {
            $observer->update($ballDetails);
        }
    }
}
