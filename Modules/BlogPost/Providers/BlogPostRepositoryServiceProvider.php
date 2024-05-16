<?php

namespace Api\BlogPost\Providers;

use Illuminate\Support\ServiceProvider;

class BlogPostRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
