<?php

interface CellInterface
{
    public function getValue(): int;
    public function setValue(int $value): void;
}
