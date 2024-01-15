<?php

namespace Proxy;

use Exception;

class Main
{
    public static function main(): void
    {
        try {
            $employeeDaoProxy = new EmployeeDaoProxy();
            $employeeDaoProxy->create('USER', new EmployeeDao());
        } catch (Exception $e) {
            print_r('Exception occured', $e->getMessage());
        }
    }
}
