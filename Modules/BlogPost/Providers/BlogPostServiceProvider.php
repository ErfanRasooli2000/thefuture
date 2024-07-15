<?php

namespace Api\BlogPost\Providers;

use Api\BlogPost\Models\BlogPost;
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

        \Route::prefix('api/blog-post')
            ->middleware(['api' , 'auth:sanctum'])
            ->group(__DIR__ . '/../Routes/api_routes.php');

        \Route::model('blogPost', BlogPost::class);


        //web

        $this->loadViewsFrom(__DIR__ . '/../Resources' , 'blogPost');

        \Route::prefix('post')
            ->middleware(['web'])
            ->group(__DIR__ . '/../Routes/web_routes.php');
    }
}
