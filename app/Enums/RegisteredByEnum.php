<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum RegisteredByEnum: string
{
    use EnumHelper;

    case ONE_ID = 'oneid';
    case E_IMZO = 'e-imzo';
}
