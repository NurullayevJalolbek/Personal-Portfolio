<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum ThemeEnum: string
{
    use EnumHelper;

    case DARK = 'dark';
    case LIGHT = 'light';
    case SYSTEM = 'system';

}
