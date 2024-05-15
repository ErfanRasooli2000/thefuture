<?php

namespace Api\Auth\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AuthPanelRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        Route::prefix('/auth/panel')
            ->middleware(['api'])
            ->group(__DIR__ . '/../Routes/api_routes.php');
    }
}
