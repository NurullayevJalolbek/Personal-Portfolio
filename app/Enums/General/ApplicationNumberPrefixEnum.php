<?php

namespace App\Enums\General;

use App\Traits\EnumHelper;

enum ApplicationNumberPrefixEnum: string
{
    use EnumHelper;

    case LEGAL = 'LP';
    case PHYSICAL = 'PP';
}
