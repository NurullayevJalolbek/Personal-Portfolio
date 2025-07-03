<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum NotificationTypeEnum: string
{
    use EnumHelper;

    case ALL = 'all';
    case SPECIFIC = 'specific';
}
