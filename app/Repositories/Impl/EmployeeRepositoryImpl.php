<?php

namespace App\Repositories\Impl;

use App\Models\Employee;
use App\Models\PasswordReset;
use App\Models\User;
use App\Repositories\AuthRepositoryInterface;
use App\Repositories\EmployeeRepositoryInterface;

class EmployeeRepositoryImpl implements EmployeeRepositoryInterface
{
    public function createEmployee($userId): Employee
    {
        $employee = Employee::create([
            'status' => 0,
            'user_id' => $userId
        ]);
        return $employee;
    }

}
