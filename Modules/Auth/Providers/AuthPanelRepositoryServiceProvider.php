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

    public function boot()
    {
        Route::prefix('/api/auth/panel')
            ->middleware(['api'])
            ->group(__DIR__ . '/../Routes/api_routes.php');
    }
}
