<?php

namespace App\Http\Middleware;

use App\Models\User\RolePermission;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        $exists = RolePermission::where('role_id', $user->role_id)
            ->whereHas('permission', function ($query) use ($request) {
                $query->whereIn('method', $request->route()->methods())
                    ->where('uri', $request->route()->uri());
            })
            ->where('status', true)
            ->exists();

        if (!($user->is_active && ($user->is_admin || $exists))) {
            abort(403,);
        }

        return $next($request);
    }
}
