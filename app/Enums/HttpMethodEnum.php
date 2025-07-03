<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum HttpMethodEnum: string
{
    use EnumHelper;

    case POST = 'POST';
    case GET = 'GET';
    case PUT = 'PUT';
    case DELETE = 'DELETE';
}
