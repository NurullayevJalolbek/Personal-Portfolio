<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum RoleGroupEnum: string
{
    use EnumHelper;

    case ADMIN = 'admin';
    case USER = 'user';
}
