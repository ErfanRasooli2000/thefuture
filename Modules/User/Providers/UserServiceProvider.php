<?php

namespace Api\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(UserRepositoryServiceProvider::class);
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        \Route::middleware(['api','auth:sanctum'])
            ->prefix('api/user')
            ->group(__DIR__ . '/../Routes/api_routes.php');
    }
}
