<?php

namespace Api\Category\Providers;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(CategoryRepositoryServiceProvider::class);
    }
}
