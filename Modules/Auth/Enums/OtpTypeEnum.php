<?php

namespace Api\Auth\Enums;
use Api\Base\Traits\BaseEnumTrait;

enum OtpTypeEnum : string
{
    use BaseEnumTrait;
    case Client_Login = "Client_Login";
}
