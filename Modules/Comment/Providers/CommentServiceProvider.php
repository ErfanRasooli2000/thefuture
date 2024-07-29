<?php

namespace Api\Comment\Providers;

use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(CommentRepositoryServiceProvider::class);
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        \Route::prefix('api/comments')
            ->middleware(['api' , 'auth:sanctum'])
            ->group(__DIR__ . '/../Routes/api_routes.php');

        \Route::prefix('comments')
            ->middleware(['web' , 'auth:client'])
            ->group(__DIR__ . '/../Routes/web_routes.php');}
}
