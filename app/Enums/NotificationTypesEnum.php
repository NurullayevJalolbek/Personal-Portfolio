<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum NotificationTypesEnum: string
{
    use EnumHelper;

    case SMS = 'sms';
    case PUSH = 'push';
}
