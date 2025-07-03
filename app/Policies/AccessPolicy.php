<?php

namespace App\Policies;

use App\Models\User;
use App\Models\User\RolePermission;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Route;

class AccessPolicy
{
    public function access(User $user, $routeName)
    {
        return $this->permission($user, $routeName)
            ? Response::allow()
            : Response::deny(__('message.Forbidden area'));
    }

    public function permission(User $user, $routeName): bool
    {
        // $route = Route::getRoutes()->getByName($routeName);

        // $exists = RolePermission::where('role_id', $user->role_id)
        //     ->whereHas('permission', function ($query) use ($route) {
        //         $query->whereIn('method', $route->methods())
        //             ->where('uri', $route->uri());
        //     })
        //     ->where('status', true)
        //     ->exists();

        return true;// $user->is_active && ($user->is_admin || $exists);
    }
}
