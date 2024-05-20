<?php

namespace Api\BlogPost\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BlogPostServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(BlogPostRepositoryServiceProvider::class);
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        Route::prefix('api/blog-post')
            ->middleware(['apt' , 'auth:sanctum'])
            ->group(__DIR__ . '/../Routes/api_routes.php');
    }
}
