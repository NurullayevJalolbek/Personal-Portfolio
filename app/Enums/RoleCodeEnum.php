<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum RoleCodeEnum: string
{
    use EnumHelper;

    case SUPER_ADMIN = 'super_admin';
    case MODERATOR = 'moderator';
    case CHANCELLERY = 'chancellery';
    case USER = 'user';
    case INVESTOR = 'investor';
    case COURT_ADMINISTRATOR = 'court_administrator';
    case SUPERVISORY_MEMBER = 'supervisory_member';
}
