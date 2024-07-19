<?php

namespace Api\Client\Providers;

use Api\Client\Database\Repos\Contracts\ClientAuthRepositoryInterface;
use Api\Client\Database\Repos\Contracts\ClientRepositoryInterface;
use Api\Client\Database\Repos\Repositories\ClientAuthRepository;
use Api\Client\Database\Repos\Repositories\ClientRepository;
use Illuminate\Support\ServiceProvider;

class ClientRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ClientRepositoryInterface::class , ClientRepository::class);
        $this->app->bind(ClientAuthRepositoryInterface::class , ClientAuthRepository::class);
    }

    public function boot()
    {

    }
}
