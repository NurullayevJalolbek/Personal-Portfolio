<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum ErrorCodeIntEnum: int
{
    use EnumHelper;

    case DEVICE_TOKEN = 456;
    case CAN_VERIFY = 457;
}
