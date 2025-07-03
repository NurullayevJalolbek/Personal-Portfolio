<?php

namespace App\Http\Controllers\User;

use App\Services\User\User\Contracts\iUserService;
use App\Http\Requests\User\AdminRequest;
use App\Enums\General\StatusStringEnum;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Models\User\Session;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use App\Models\User\Role;
use App\Models\User;

class AdminController extends Controller
{
    public function index(Request $request, iUserService $service)
    {
        Gate::authorize('index', [User::class, 'admins.index']);
        $request->merge([
            'per_page' => 15,
            'role_group' => 'admin',
        ]);
        $datas = $service->filter($request);
        $statuses = StatusStringEnum::list();
        return view('user.admin.index', compact('datas', 'statuses'));
    }

    public function create(iUserService $service)
    {
        $model = app(User::class);
        Gate::authorize('create', [User::class, 'admins.create']);
        $statuses = StatusStringEnum::list();
        $roles = Role::with([
            'translations'
        ])
            ->adminGroup()
            ->get();

        return view('user.admin.create', compact('model', 'statuses', 'roles'));
    }

    public function store(AdminRequest $request, iUserService $service)
    {
        Gate::authorize('store', [User::class, 'admins.store']);
        $service->store($request);
        return redirect()->route('admins.index')->withSuccess(__('message.Successfully created'));
    }

    public function sessions(User $admin)
    {
        Gate::authorize('sessions', [$admin, 'admins.sessions']);
        $agent = new Agent();
        $datas = Session::where('user_id', $admin->id)
            ->sort()
            ->customPaginate(15);

        return view('user.admin.sessions', compact('admin', 'agent', 'datas'));
    }

    public function edit(User $admin)
    {
        Gate::authorize('edit', [$admin, 'admins.edit']);
        $model = $admin;
        $statuses = StatusStringEnum::list();
        $roles = Role::with([
            'translations'
        ])
            ->adminGroup()
            ->get();

        return view('user.admin.edit', compact('model', 'statuses', 'roles'));
    }

    public function update(AdminRequest $request, User $admin, iUserService $service)
    {
        Gate::authorize('update', [$admin, 'admins.update']);
        $service->update($request, $admin->id);
        return redirect()->route('admins.index')->withSuccess(__('message.Successfully updated'));
    }

    public function destroy(User $admin, iUserService $service)
    {
        Gate::authorize('destroy', [$admin, 'admins.destroy']);
        $service->delete($admin->id);
        return success_response(__('message.Successfully deleted'));
    }
}
