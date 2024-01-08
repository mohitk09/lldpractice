<?php

namespace driver;

use logic\UserService;
use model\User;

class Driver
{
    public static function main(): void
    {
        $u1 = UserService::createUser("Rohan", 27, 'M');
    }
};
