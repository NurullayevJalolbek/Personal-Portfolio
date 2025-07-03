<?php

namespace App\Enums\General;

use App\Traits\EnumHelper;
use Illuminate\Support\Facades\Lang;

enum ApplicationStatusEnum: string
{
    use EnumHelper;

    const COLORS = [
        'sent' => '#ffab00',
        'process' => '#03c3ec',
        'answered' => '#71dd37',
    ];

    case SENT = 'sent';
    case PROCESS = 'process';
    case ANSWERED = 'answered';

    public static function listWColor()
    {
        $datas = [];
        foreach (self::values() as $value) {
            $datas[] = [
                'name' => Lang::has("enum.$value")
                    ? __('enum.' . $value)
                    : ucfirst($value),
                'code' => $value,
                'color' => self::COLORS[$value] ?? '#ff0000',
            ];
        }

        return $datas;
    }

    public static function translate($case, $locale = null)
    {
        return Lang::has("enum.$case", $locale)
            ? [
                'code' => $case,
                'color' => self::COLORS[$case] ?? '#ff0000',
                'name' => __('enum.' . $case, locale: $locale),
            ]
            : [
                'code' => $case,
                'color' => self::COLORS[$case] ?? '#ff0000',
                'name' => ucfirst($case)
            ];
    }
}
