<?php

namespace Api\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(UserRepositoryServiceProvider::class);
    }
}
