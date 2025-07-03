<?php

namespace App\Http\Controllers\Admin;

use App\Services\User\Contracts\iUserService;
use App\Http\Requests\User\UserUpdateRequest;
use App\Http\Requests\User\UserRequest;
use App\Enums\General\StatusStringEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Role;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index(Request $request, iUserService $service)
    {
        $datas = $service->filter($request);
        $statuses = StatusStringEnum::list();

        return view('admin.users.index', [
            'datas' => $datas,
            'statuses' => $statuses,
        ]);
    }

    public function create(iUserService $service)
    {
        $model = new User();
        $statuses = StatusStringEnum::list();
        $roles = Role::with(['translations'])->adminGroup()->get();

        return view('admin.users.create', [
            'model' => $model,
            'statuses' => $statuses,
            'roles' => $roles,
        ]);
    }

    public function store(UserRequest $request, iUserService $service)
    {
        $service->store($request);
        return redirect()->route('admin.users.index')
            ->withSuccess(__('message.Successfully created'));
    }

    public function edit(User $user)
    {
        $model = $user;
        $statuses = StatusStringEnum::list();
        $roles = Role::with(['translations'])->adminGroup()->get();

        return view('admin.users.edit', [
            'model' => $model,
            'statuses' => $statuses,
            'roles' => $roles,
        ]);
    }

    public function update(UserUpdateRequest $request, User $user, iUserService $service)
    {
        $service->update($request, $user->id);
        return redirect()->route('admin.users.index')
            ->withSuccess(__('message.Successfully updated'));
    }

    public function destroy(User $user, iUserService $service)
    {
        if($user->role == 'super_admin') {
            return error_response(__('message.You can not delete super admin'));
        }
        $service->delete($user->id);
        return success_response(__('message.Successfully deleted'));
    }
}
