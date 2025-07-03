<?php

use App\Enums\General\LanguageCodeEnum;
use App\Models\Language;
use App\Models\About;

function getDefaultMetaImage()
{
    return asset('img/meta_logo2.png');
}

function getDefaultMetaLogo()
{
    return asset('site/images/logo.svg');
}

function getAboutInfo()
{
    return About::first();
}

function getDegreeList()
{
    return [
        'Intern',
        'Junior',
        'Middle',
        'Senior',
        'Lead',
        'Principal',
        'Architect',
        'CTO'
    ];
}

function getFrontendTechnologies()
{
    return [
        'HTML',
        'CSS',
        'JavaScript',
        'TypeScript',
        'ReactJs',
        'NextJs',
        'VueJs',
        'NuxtJs',
        'Svelte',
        'SvelteKit',
        'Angular',
        'Tailwind CSS',
        'Bootstrap',
        'Material UI',
        'Chakra UI',
        'GSAP',
        'Framer Motion',
        'Three.js',
        'PixiJS'
    ];
}

function getLogo()
{
    return asset('img/logo.png');
}

function getDefaultLogo()
{
    return asset('img/default_logo.png');
}

function isActiveCollapseArray($routeNames, $class = 'active'): string
{
    foreach ($routeNames as $routeName) {
        if (request()->routeIs($routeName) || request()->is($routeName)) {
            return $class;
        }
    }
    return '';
}

function requestOrder()
{
    $sort = request()->get('sort', 'id');
    $direction = request()->get('direction', 'desc');
    $direction = $direction == 'desc'
        ? '-'
        : '';

    $order = request()->get('order', $direction . $sort);

    if ($order[0] == '-') {
        $result = [
            'key' => substr($order, 1),
            'value' => 'desc'
        ];
    } else {
        $result = [
            'key' => $order,
            'value' => 'asc'
        ];
    }
    return $result;
}

function filterPhone($phone)
{
    return str_replace(['(', ')', ' ', '-'], '', $phone);
}

function nudePhone($phone)
{
    if (strlen($phone) > 0) {
        $phone = str_replace(['(', ')', ' ', '-'], '', $phone);
    }

    $phone = preg_replace('/^\+998$/u', '', $phone);

    return $phone;
}

function getRequest($request = null)
{
    return $request ?? request();
}

function defaultLocale()
{
    return Language::where('default', true)->first();
}

function systemLangs()
{
    return Language::whereIn('url', LanguageCodeEnum::values())
        ->active()
        ->get();
}

function langs()
{
    return Language::active()
        ->orderBy('name')
        ->get();
}

function allLanguage()
{
    return Language::all();
}

function routeParam(null|string $separator = ',', string $parameter = 'id'): null|int|string
{
    if (request()->route()->hasParameter($parameter)) {
        $data = request()->route()->parameter($parameter);
        return $separator . (is_object($data) ? $data->id : $data);
    }
    return null;
}

function formatDate(string|int|null $date, $format = 'd.m.Y')
{
    return is_null($date)
        ? null
        : date($format, is_int($date)
            ? $date
            : strtotime($date));
}

function formatDateTime(string|int|null $dateTime, $format = 'H:i d.m.Y')
{
    return is_null($dateTime)
        ? null
        : date($format, is_int($dateTime)
            ? $dateTime
            : strtotime($dateTime));
}

function formatCurrency($number)
{
    return $number
        ? number_format($number, 0, '', ' ')
        : null;
}
