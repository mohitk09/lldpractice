<?php

namespace Strategy;

class NormalDriveStrategy implements DriveStrategy
{
    public function drive(): void
    {
        echo 'Normal drive strategy';
    }
};
