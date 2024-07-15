<?php

namespace Api\Favourite\Providers;

use Illuminate\Support\ServiceProvider;

class FavouriteServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(FavouriteRepositoryServiceProvider::class);
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        \Route::prefix('favourite')
            ->middleware(['api'])
            ->group(__DIR__ .'/../Routes/api_routes.php');
    }
}
