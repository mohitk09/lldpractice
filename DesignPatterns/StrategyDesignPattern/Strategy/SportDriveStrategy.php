<?php

namespace Strategy;

class SportDriveStrategy implements DriveStrategy
{
    public function drive(): void
    {
        echo 'I have super capabilities';
    }
};
