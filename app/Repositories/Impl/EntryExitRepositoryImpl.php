<?php

namespace App\Repositories\Impl;

use App\Models\Employee;
use App\Models\EntryExit;
use App\Models\PasswordReset;
use App\Models\User;
use App\Repositories\AuthRepositoryInterface;
use App\Repositories\EmployeeRepositoryInterface;
use App\Repositories\EntryExitRepositoryInterface;

class EntryExitRepositoryImpl implements EntryExitRepositoryInterface
{
    public function entryStore($user): EntryExit
    {
        $data =new  EntryExit();
        $data->employee_id  = $user->employees->id;
        $data->login_time = now();
        $data->save();
        return $data;
    }

}
