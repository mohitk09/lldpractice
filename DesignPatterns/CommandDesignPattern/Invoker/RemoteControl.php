<?php

namespace CommandDesignPattern\Invoker;

use CommandDesignPattern\Command\ICommand;
use SplStack;

class RemoteControl
{
    public SplStack $command_history = new SplStack();
    public ICommand $command;

    public function __construct()
    {
    }

    public function setCommand(ICommand $command): void
    {
        $this->command = $command;
    }

    public function pressButton(): void
    {
        $this->command->execute();
        $this->command_history->push($this->command);
    }

    public function undo(): void
    {
        if (!$this->command_history->isEmpty()) {
            $last_command =  $this->command_history->pop();
            $last_command->undo();
        }
    }
}
