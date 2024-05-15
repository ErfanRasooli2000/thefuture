<?php

namespace Api\Auth\Database\Repos\Contracts;

interface AuthPanelRepositoryInterface
{
    public function login(array $inputs) :array;
}
