<?php

namespace CommandDesignPattern\Command;

use CommandDesignPattern\Receiver\Ac;

class TurnOnAc implements ICommand
{

    public Ac $ac;

    public function __construct(Ac $ac)
    {
        $this->ac = $ac;
    }

    public function execute(): void
    {
        $this->ac->turnOnAc();
    }

    public function undo(): void
    {
        $this->ac->turnOfAc();
    }
}
