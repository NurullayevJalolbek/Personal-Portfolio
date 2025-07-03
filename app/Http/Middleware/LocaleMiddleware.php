<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Response;
use App\Enums\General\LanguageCodeEnum;
use Illuminate\Http\Request;
use Closure;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $lang = session()->get('lang', $request->header('lang'));

        if ($lang) {
            if (!in_array($lang ?: '', LanguageCodeEnum::values())) {
                if ($request->is('api/*')) {
                    return error_response(__('message.No such language exists in the system'));
                }

                return redirect()->back()->withError(__('message.No such language exists in the system'));
            }

            app()->setlocale($lang);
        }

        return $next($request);
    }
}
