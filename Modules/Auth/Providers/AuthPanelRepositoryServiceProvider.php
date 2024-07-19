<?php

namespace Api\Auth\Providers;

use Api\Auth\Database\Repos\Contracts\AuthPanelRepositoryInterface;
use Api\Auth\Database\Repos\Repositories\AuthPanelRepository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AuthPanelRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(AuthPanelRepositoryInterface::class , AuthPanelRepository::class);
    }

}
