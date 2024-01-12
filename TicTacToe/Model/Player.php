<?php

namespace model;

class Player
{
    private string $name;
    public PlayingPiece $playingPeice;

    public function __construct(string $name, PlayingPiece $playingPeice)
    {
        $this->name = $name;
        $this->playingPeice = $playingPeice;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // Similary get and set methods for playing peice
}
