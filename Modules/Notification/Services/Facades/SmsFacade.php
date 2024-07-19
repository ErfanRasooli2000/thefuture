<?php

namespace Api\Notification\Services\Facades;

use Illuminate\Support\Facades\Facade;

class SmsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "smsFacade";
    }
}
