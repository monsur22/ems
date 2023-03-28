<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Models\PasswordReset;
use App\Models\User;

interface EmployeeRepositoryInterface
{
    public function createEmployee($userId): Employee;
}
