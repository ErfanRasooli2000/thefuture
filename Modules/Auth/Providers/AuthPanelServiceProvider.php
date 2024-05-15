<?php

namespace Api\Auth\Providers;

use Illuminate\Support\ServiceProvider;

class AuthPanelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(AuthPanelRepositoryServiceProvider::class);
    }
}
