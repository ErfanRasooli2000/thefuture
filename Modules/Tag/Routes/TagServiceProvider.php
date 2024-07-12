<?php

namespace Api\Tag\Routes;

use Illuminate\Support\ServiceProvider;

class TagServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(TagRepositoryServiceProvider::class);
    }

}
