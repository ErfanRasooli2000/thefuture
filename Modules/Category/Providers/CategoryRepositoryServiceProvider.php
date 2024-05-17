<?php

namespace Api\Category\Providers;

use Api\Category\Database\Repos\Contracts\CategoryRepositoryInterface;
use Api\Category\Database\Repos\Repositories\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class CategoryRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CategoryRepositoryInterface::class , CategoryRepository::class);
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        \Route::prefix('/api/category')
            ->middleware(['api' , 'auth:sanctum'])
            ->group(__DIR__ . '/../Routes/api_routes.php');
    }
}
