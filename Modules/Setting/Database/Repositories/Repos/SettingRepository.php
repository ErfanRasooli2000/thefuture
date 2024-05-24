<?php

namespace Api\Setting\Database\Repositories\Repos;

use Api\Setting\Database\Repositories\Contracts\SettingRepositoryInterface;
use Api\Setting\Models\Setting;
use Illuminate\Support\Facades\Redis;

class SettingRepository implements SettingRepositoryInterface
{
    public function __construct(
        protected Setting $model
    ){}

    public function getAll(): mixed
    {
        return $this->model
            ->newQuery()
            ->get();
    }

    public function saveAll(array $keys): bool
    {
        $data = [];

        Redis::mSet($keys);

        foreach ($keys as $key => $value)
            $data[] = [
                'key' => $key,
                'value' => $value,
            ];


        return $this->model
            ->newQuery()
            ->upsert($data,'key');
    }
}
