<?php

namespace Api\User\Providers;

use Api\User\Database\Repos\Contracts\UserRepositoryInterface;
use Api\User\Database\Repos\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class,UserRepository::class);
    }
}
