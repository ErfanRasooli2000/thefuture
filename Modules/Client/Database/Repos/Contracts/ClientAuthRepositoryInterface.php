<?php

namespace Api\Client\Database\Repos\Contracts;

interface ClientAuthRepositoryInterface
{
    public function loginSendCode(array $inputs) :void;
    public function doLogin(array $inputs) :array;
}
