<?php

namespace Api\Client\Providers;

use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(ClientRepositoryServiceProvider::class);
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        \Route::prefix('api/client')
            ->middleware(['api' , 'auth:sanctum'])
            ->group(__DIR__ . '/../Routes/api_routes.php');

        \Route::prefix('api/client')
            ->middleware(['api'])
            ->group(__DIR__ . '/../Routes/api_clients.php');

        //web
        $this->loadViewsFrom(__DIR__ . '/../Resources' , 'client');

        \Route::prefix('client')
            ->middleware(['web'])
            ->group(__DIR__ . '/../Routes/web_routes.php');
    }
}
