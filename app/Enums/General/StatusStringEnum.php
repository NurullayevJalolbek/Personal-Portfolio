<?php

namespace App\Enums\General;

use App\Traits\EnumHelper;

enum StatusStringEnum: string
{
    use EnumHelper;

    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
}
