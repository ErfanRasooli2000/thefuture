<?php

namespace Api\Pages\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class PagesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources' , 'pages');

        \Route::middleware('web')
            ->group(__DIR__ . '/../Routes/web_routes.php');
    }
}
