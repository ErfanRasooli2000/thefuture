<?php

namespace Api\User\Providers;

use Api\User\Database\Repos\Contracts\UserRepositoryInterface;
use Api\User\Database\Repos\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class,UserRepository::class);
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        \Route::middleware(['api'])->prefix('api/user')->group(__DIR__ . '/../Routes/api_routes.php');
    }
}
