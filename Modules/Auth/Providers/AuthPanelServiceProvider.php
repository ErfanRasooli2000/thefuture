<?php

namespace Api\Auth\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AuthPanelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(AuthPanelRepositoryServiceProvider::class);
    }

    public function boot()
    {
        Route::prefix('/api/auth/panel')
            ->middleware(['api'])
            ->group(__DIR__ . '/../Routes/api_routes.php');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
