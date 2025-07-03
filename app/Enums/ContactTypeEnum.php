<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum ContactTypeEnum: string
{
    use EnumHelper;

    case PHONE = 'phone';
    // case INSTAGRAM = 'instagram';
    case TELEGRAM = 'telegram';
    case TELEGRAM_BOT = 'telegram_bot';
    // case LINK = 'link';
    case EMAIL = 'email';
    case WEB_SITE = 'web_site';
    case FACEBOOK = 'facebook';
    case YOU_TUBE = 'you_tube';

    public static function socials()
    {
        return [
            self::TELEGRAM->value,
            self::FACEBOOK->value,
            self::YOU_TUBE->value,
            // self::LINK->value,
        ];
    }
}
