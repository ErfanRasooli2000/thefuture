<?php

namespace Api\Comment\Providers;

use Api\Comment\Database\Repos\Contracts\CommentRepositoryInterface;
use Api\Comment\Database\Repos\Repositories\CommentRepository;
use Illuminate\Support\ServiceProvider;

class CommentRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CommentRepositoryInterface::class, CommentRepository::class);
    }

}
