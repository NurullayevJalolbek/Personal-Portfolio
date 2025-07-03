<?php

namespace App\Enums\General;

use App\Traits\EnumHelper;

enum LanguageCodeEnum: string
{
    use EnumHelper;

    case OZ = 'cyrl';
    case UZ = 'uz';
    case EN = 'en';
    case RU = 'ru';
}
