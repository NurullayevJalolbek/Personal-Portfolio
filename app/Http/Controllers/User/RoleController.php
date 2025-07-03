<?php

namespace App\Http\Controllers\User;

use App\Enums\General\StatusStringEnum;
use App\Enums\RoleGroupEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\RoleRequest;
use App\Models\User\Role;
use App\Traits\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    use Crud;

    public $modelClass = Role::class;

    public function index(Request $request)
    {
        Gate::authorize('access', ['roles.index']);

        $datas = $this->modelClass::with([
            'translations'
        ])
            ->sort()
            ->paginate(15);

        return view('user.role.index', compact('datas'));
    }

    public function create()
    {
        Gate::authorize('access', ['roles.create']);

        $model = app($this->modelClass);
        $statuses = StatusStringEnum::list();
        $groups = RoleGroupEnum::list();
        return view('user.role.create', compact('model', 'statuses', 'groups'));
    }

    public function store(RoleRequest $request)
    {
        Gate::authorize('access', ['roles.store']);

        $this->cStore($request);
        return redirect()->route('roles.index')->withSuccess(__('message.Successfully created'));
    }

    public function edit(Role $role)
    {
        Gate::authorize('access', ['roles.edit']);

        $model = $role;
        $statuses = StatusStringEnum::list();
        $groups = RoleGroupEnum::list();
        return view('user.role.edit', compact('model', 'statuses', 'groups'));
    }

    public function update(RoleRequest $request, Role $role)
    {
        Gate::authorize('access', ['roles.update']);

        $this->cUpdate($request, $role->id);
        return redirect()->route('roles.index')->withSuccess(__('message.Successfully updated'));
    }

    public function destroy(Role $role)
    {
        Gate::authorize('access', ['roles.destroy']);

        $this->cDelete($role->id);
        return success_response(__('message.Successfully deleted'));
    }
}
