<?php

namespace Cricbuzz\inning;

use Cricbuzz\MatchType;

class InningDetails
{
    public MatchType $matchType;

    /** @var array<OverDetails> */
    public $overDetails;
}
