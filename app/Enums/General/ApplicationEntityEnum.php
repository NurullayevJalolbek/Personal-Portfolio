<?php

namespace App\Enums\General;

use App\Traits\EnumHelper;

enum ApplicationEntityEnum: string
{
    use EnumHelper;

    case LEGAL= 'legal';
    case PHYSICAL= 'physical';
}
