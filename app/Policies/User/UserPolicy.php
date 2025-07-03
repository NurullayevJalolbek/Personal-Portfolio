<?php

namespace App\Policies\User;

use App\Models\User;
use App\Models\User\RolePermission;
use App\Models\User\UserRole;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Route;

class UserPolicy
{
    public function index(User $user, $routeName): Response
    {
        return $this->permission($user, $routeName)
            ? Response::allow()
            : Response::deny(__('message.Forbidden area'));
    }

    public function create(User $user, $routeName): Response
    {
        return $this->permission($user, $routeName)
            ? Response::allow()
            : Response::deny(__('message.Forbidden area'));
    }

    public function store(User $user, $routeName): Response
    {
        return $this->permission($user, $routeName)
            ? Response::allow()
            : Response::deny(__('message.Forbidden area'));
    }

    public function show(User $user, User $model, $routeName): Response
    {
        return $this->permission($user, $routeName)
            ? Response::allow()
            : Response::deny(__('message.Forbidden area'));
    }

    public function roleStatus(User $user, UserRole $model, $routeName): Response
    {
        return $this->permission($user, $routeName)
            ? Response::allow()
            : Response::deny(__('message.Forbidden area'));
    }

    public function edit(User $user, User $model, $routeName): Response
    {
        return $this->permission($user, $routeName) && $user->id != $model->id
            ? Response::allow()
            : Response::deny(__('message.Forbidden area'));
    }

    public function update(User $user, User $model, $routeName): Response
    {
        return $this->permission($user, $routeName) && $user->id != $model->id
            ? Response::allow()
            : Response::deny(__('message.Forbidden area'));
    }

    public function sessions(User $user, User $model, $routeName): Response
    {
        return $this->permission($user, $routeName)
            ? Response::allow()
            : Response::deny(__('message.Forbidden area'));
    }

    public function destroy(User $user, User $model, $routeName): Response
    {
        return $this->permission($user, $routeName) && $user->id != $model->id
            ? Response::allow()
            : Response::deny(__('message.Forbidden area'));
    }

    public function permission(User $user, $routeName): bool
    {
        $route = Route::getRoutes()->getByName($routeName);

        $exists = RolePermission::where('role_id', $user->role_id)
            ->whereHas('permission', function ($query) use ($route) {
                $query->whereIn('method', $route->methods())
                    ->where('uri', $route->uri());
            })
            ->where('status', true)
            ->exists();

        return $user->is_active && ($user->is_admin || $exists);
    }
}
