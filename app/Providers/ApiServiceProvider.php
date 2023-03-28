<?php

namespace App\Providers;

use App\Repositories\EmployeeRepositoryInterface;
use App\Repositories\Impl\EmployeeRepositoryImpl;
use App\Services\EmployeeServiceInterface;
use App\Services\Impl\EmployeeServiceImpl;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EmployeeServiceInterface::class, EmployeeServiceImpl::class);
        $this->app->bind(EmployeeRepositoryInterface::class, EmployeeRepositoryImpl::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
