<?php

namespace Api\Tag\Routes;

use Illuminate\Support\ServiceProvider;

class TagRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
