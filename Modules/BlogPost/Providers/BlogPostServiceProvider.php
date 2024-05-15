<?php

namespace Api\BlogPost\Providers;

use Illuminate\Support\ServiceProvider;

class BlogPostServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(BlogPostRepositoryServiceProvider::class);
    }
}
