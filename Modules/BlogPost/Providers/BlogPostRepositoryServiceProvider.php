<?php

namespace Api\BlogPost\Providers;

use Api\BlogPost\Database\Repos\Contracts\BlogPostRepositoryInterface;
use Api\BlogPost\Database\Repos\Repositories\BlogPostRepository;
use Illuminate\Support\ServiceProvider;

class BlogPostRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(BlogPostRepositoryInterface::class , BlogPostRepository::class);
    }
}
