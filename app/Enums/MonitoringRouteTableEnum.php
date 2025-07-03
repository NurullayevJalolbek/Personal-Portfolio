<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum MonitoringRouteTableEnum: string
{
    use EnumHelper;

    case SERVICES = 'services';
    case GENERAL_DATAS = 'general-datas';
}
