<?php

namespace App\Http\Middleware;

use App\Exceptions\CustomErrorException;
use App\Models\User\RolePermission;
use App\Models\User\UserRolePermission;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccessApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        $exists = UserRolePermission::whereHas('user_role', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
            ->whereHas('permission', function ($query) use ($request) {
                $query->whereIn('method', $request->route()?->methods())
                    ->where('uri', $request->route()?->uri());
            })
            ->where('status', true)
            ->exists();

        if (!($user->is_active && ($user->is_admin || $exists))) {
            return error_response(__('message.Forbidden area'), 403);
        }

        return $next($request);
    }
}
