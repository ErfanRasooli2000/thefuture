<?php

namespace Api\Comment\Providers;

use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(CommentRepositoryServiceProvider::class);
    }
}
