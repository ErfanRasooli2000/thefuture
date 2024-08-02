<?php

namespace Api\Comment\Enums;

use Api\Base\Traits\BaseEnumTrait;

enum CommentStatusEnum: string
{
    use BaseEnumTrait;

    case Pending = "Pending";
    case Approved = "Approved";
    case Rejected = "Rejected";
}
