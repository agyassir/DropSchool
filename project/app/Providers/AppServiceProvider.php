<?php

namespace App\Providers;

use App\Repositories\IAuthRepository;
use App\Repositories\Implementations\AuthRepositoryImpl;
use App\Services\AuthServiceImpl;
use App\Services\IAuthService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IAuthService::class, AuthServiceImpl::class);
        $this->app->bind(IAuthRepository::class, AuthRepositoryImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrap();
    }
}
