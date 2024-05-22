<?php

namespace Api\Setting\Providers;

use Api\Setting\Database\Repositories\Contracts\SettingRepositoryInterface;
use Api\Setting\Database\Repositories\Repos\SettingRepository;
use Illuminate\Support\ServiceProvider;

class SettingRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(SettingRepositoryInterface::class , SettingRepository::class);
    }
}
