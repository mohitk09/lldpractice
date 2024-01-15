<?php

namespace Proxy;

use Exception;

class EmployeeDaoProxy implements EmployeeDao
{
    public EmployeeDao $employeeDaoObj;

    public function __construct()
    {
        $this->employeeDaoObj = new EmployeeDaoImpl();
    }

    public function create(string $client, EmployeeDao $obj): void
    {
        if ($client === 'ADMIN') {
            $this->employeeDaoObj->create($client, $obj);
        }
        throw new Exception('Access denied');
    }

    public function delete(string $client, EmployeeDao $obj): void
    {
        if ($client === 'ADMIN') {
            $this->employeeDaoObj->delete($client, $obj);
        }
        throw new Exception('Access denied');
    }

    public function get(string $client, EmployeeDao $obj): EmployeeDao
    {
        if ($client === 'ADMIN' || $client === 'USER') {
            $this->employeeDaoObj->get($client, $obj);
        }
        throw new Exception('Access denied');
    }
}
