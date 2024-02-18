<?php

namespace CommandDesignPattern\Command;

interface ICommand
{
    public function execute(): void;
    public function undo(): void;
}
