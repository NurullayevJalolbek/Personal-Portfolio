<?php

namespace App\Http\Middleware;

use App\Enums\ErrorCodeIntEnum;
use App\Exceptions\CustomErrorException;
use App\Models\User\UserDevice;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserDeviceMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $exists = UserDevice::where('token_id', $request->user()->currentAccessToken()->id)
            ->whereNotNull('device_token')
            ->exists();

        if (!$exists) {
            throw new CustomErrorException(__('auth.device_token'), [
                'error_code' => ErrorCodeIntEnum::DEVICE_TOKEN->value
            ]);
        }

        return $next($request);
    }
}
