<?php

namespace App\Enums;

use App\Traits\EnumHelper;
use Illuminate\Support\Facades\Lang;

enum WeekDaysEnum: string
{
    use EnumHelper;

    case MONDAY = 'monday';
    case TUESDAY = 'tuesday';
    case WEDNESDAY = 'wednesday';
    case THURSDAY = 'thursday';
    case FRIDAY = 'friday';
    case SATURDAY = 'saturday';
    case SUNDAY = 'sunday';

    protected static function list()
    {
        $list = [];
        foreach (self::values() ?: [] as $value) {
            $list[$value] = Lang::has("week.$value")
                ? __('week.' . $value)
                : ucfirst($value);
        }

        return $list;
    }
}
