<?php

namespace Api\Media\Providers;

use Api\Media\Database\Repos\Contracts\MediaRepositoryInterface;
use Api\Media\Database\Repos\Repositories\MediaRepository;
use Illuminate\Support\ServiceProvider;

class MediaRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(MediaRepositoryInterface::class , MediaRepository::class);
    }

    public function boot()
    {

    }
}
