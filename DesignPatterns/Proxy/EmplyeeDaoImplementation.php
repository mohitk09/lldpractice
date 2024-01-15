<?php

namespace Proxy;

class EmployeeDaoImpl implements EmployeeDao
{
    public function create(string $client, EmployeeDao $obj): void
    {
        echo 'created';
    }

    public function delete(string $client, EmployeeDao $obj): void
    {
        echo 'deleted';
    }

    public function get(string $client, EmployeeDao $obj): EmployeeDao
    {
        print_r('fetching data from the DB!');
        return new EmployeeDao();
    }
}
