<?php

namespace Api\Base\Enums;
use Api\Base\Traits\BaseEnumTrait;

enum GenderEnum : string
{
    use BaseEnumTrait;


    case MALE = "male";
    case FEMALE = "female";
    case OTHER = "other";



    public
    function title(): string
    {
        return match ($this) {
            self::MALE => "آقا",
            self::FEMALE => "خانوم",
            self::OTHER => "سایر",
        };
    }
}
