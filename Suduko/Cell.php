<?php

class Cell
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}
