<?php

namespace App\Providers;

use App\Repositories\EmployeeRepositoryInterface;
use App\Repositories\EntryExitRepositoryInterface;
use App\Repositories\Impl\EmployeeRepositoryImpl;
use App\Repositories\Impl\EntryExitRepositoryImpl;
use App\Services\EmployeeServiceInterface;
use App\Services\EntryExitServiceInterface;
use App\Services\Impl\EmployeeServiceImpl;
use App\Services\Impl\EntryExitServiceImpl;
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
        $this->app->bind(EntryExitServiceInterface::class, EntryExitServiceImpl::class);
        $this->app->bind(EntryExitRepositoryInterface::class, EntryExitRepositoryImpl::class);
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
