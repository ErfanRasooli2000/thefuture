<?php

namespace Api\Setting\Database\Repositories\Contracts;

interface SettingRepositoryInterface
{
    public function getAll() :mixed;

    public function saveAll(array $keys) :bool;
}
