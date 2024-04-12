<?php

namespace Cricbuzz;

class T20Match implements MatchType
{
    public function getNumberOfOvers(): int
    {
        return 20;
    }
}
