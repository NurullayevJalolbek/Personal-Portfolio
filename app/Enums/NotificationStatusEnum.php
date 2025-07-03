<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum NotificationStatusEnum: string
{
    use EnumHelper;

    case PROCESS = 'process';
    case SENT = 'sent';
    case WRONG = 'wrong';
}
