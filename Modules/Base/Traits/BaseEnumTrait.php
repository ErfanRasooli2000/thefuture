<?php

namespace Api\Base\Traits;

trait BaseEnumTrait
{
    /**
     * @param $enValue
     * @return string|null
     */
    static function getTitleByValue($enValue): ?string
    {
        $result = null;

        if (is_null($enValue))
            return null;

        foreach (self::cases() as $value) {
            if ($value->value === $enValue->value) {
                $result = $value->title();
            }
        }

        return $result;
    }

    public static function values()
    {
        return array_map(fn($e) => $e->value, self::cases());
    }

    public static function pluckObject()
    {
        $result = [];
        foreach (self::cases() as $value) {
            $result[] = ['id' => $value->value, 'title' => $value->title()];

        }
        return collect($result);
    }

    public static function pluck()
    {
        $result = [];
        foreach (self::cases() as $value) {
            $result[$value->value] = $value->title();
        }
        return $result;
    }
}
