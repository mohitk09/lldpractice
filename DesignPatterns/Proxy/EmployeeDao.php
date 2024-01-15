<?php

namespace Proxy;

interface EmployeeDao
{
    public function create(string $client, EmployeeDao $obj): void;

    public function delete(string $client, EmployeeDao $obj): void;

    public function get(string $client, EmployeeDao $obj): EmployeeDao;
}
