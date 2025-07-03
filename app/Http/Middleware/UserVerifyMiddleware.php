<?php

namespace App\Http\Middleware;

use App\Enums\ErrorCodeIntEnum;
use App\Exceptions\CustomErrorException;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserVerifyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $empty = User::whereNull('phone')
            ->where('id', Auth::id())
            ->exists();

        if ($empty) {
            throw new CustomErrorException('Verifikatsiyadan o\'ting', [
                'error_code' => ErrorCodeIntEnum::CAN_VERIFY->value
            ]);
        }

        return $next($request);
    }
}
