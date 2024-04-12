<?php

namespace Cricbuzz\ScoreUpdater;

use Cricbuzz\inning\BallDetails;

interface ScoreUpdater
{
    public function update(BallDetails $ballDetails): void;
}
