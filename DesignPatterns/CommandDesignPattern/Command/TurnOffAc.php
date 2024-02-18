<?php

namespace CommandDesignPattern\Command;

use CommandDesignPattern\Receiver\Ac;

// This class will have similar implementation as of TurnOnAc  
class TurnOffAc implements ICommand
{
    public Ac $ac;
    public function execute(): void
    {
    }

    public function undo(): void
    {
    }
}
