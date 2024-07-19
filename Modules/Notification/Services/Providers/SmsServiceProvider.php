<?php

namespace Api\Notification\Services\Providers;

use Api\Notification\Services\Adapters\SabaNovinAdapter;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('smsFacade' , function (){

            return new SabaNovinAdapter();

        });
    }
}
