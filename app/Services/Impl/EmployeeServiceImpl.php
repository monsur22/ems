<?php

namespace App\Services\Impl;

use App\Services\AuthServiceInterface;
use App\Models\Employee;
use App\Repositories\EmployeeRepositoryInterface;
use App\Services\EmployeeServiceInterface;

class EmployeeServiceImpl implements EmployeeServiceInterface
{
    protected $authService;
    protected $employeeRepository;
    public function __construct(AuthServiceInterface $authService,EmployeeRepositoryInterface $employeeRepository)
    {
        $this->authService = $authService;
        $this->employeeRepository = $employeeRepository;
    }

    public function createEmployee($request)
    {
        // Create a new user
        $user = $this->authService->createUser($request);
        $user = json_decode($user->getContent())->user;
        // Create a new employee
        $employee = $this->employeeRepository->createEmployee($user->id);
        return $employee;
    }

}
