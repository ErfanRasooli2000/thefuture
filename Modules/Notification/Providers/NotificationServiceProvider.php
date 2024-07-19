<?php

namespace Api\Notification\Providers;

use Api\Notification\Services\Providers\SmsServiceProvider;
use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(SmsServiceProvider::class);
    }
}
