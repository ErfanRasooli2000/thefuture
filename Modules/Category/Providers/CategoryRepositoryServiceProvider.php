<?php

namespace Api\Category\Providers;

use Illuminate\Support\ServiceProvider;

class CategoryRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
