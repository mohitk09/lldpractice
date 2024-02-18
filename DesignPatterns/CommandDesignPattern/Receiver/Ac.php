<?php

namespace CommandDesignPattern\Receiver;

class Ac
{
    public bool $isOn;

    public function turnOnAc(): void
    {
        $this->isOn = true;
        echo 'Ac is switched On';
    }

    public function turnOfAc(): void
    {
        $this->isOn = false;
        echo 'Ac is switched off';
    }
}
