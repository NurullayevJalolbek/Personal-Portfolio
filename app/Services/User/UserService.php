<?php

namespace App\Services\User;

use App\Services\User\Contracts\iUserService;
use App\Models\Notification\UserNotification;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\Crud;

class UserService implements iUserService
{
    use Crud;

    public $modelClass = User::class;

    public function filter(Request $request)
    {
        return $this->modelClass::with([
            'role.translations',
        ])
            ->whereSearch(['surname', 'name', 'patronymic'])
            ->whereEqual('region_id')
            ->whereEqual('registered_by')
            ->whereEqual('status')
            ->whereHasEqual('roles', 'code', 'role_code')
            ->when($request->role_group, function ($query) {
                $query->where(function ($query) {
                    $query->whereHasEqual('role', 'group', 'role_group')
                        ->orWhere(function ($query) {
                            $query->whereHasEqual('roles', 'group', 'role_group');
                        });
                });
            })
            ->sort()
            ->customPaginate();
    }

    public function store(Request $request)
    {
        $request->offsetSet('phone', nudePhone($request->get('phone')));
        return $this->cStore($request);
    }

    public function noticeCount(Request $request)
    {
        $id = PersonalAccessToken::findToken(preg_replace('/Bearer\s/', '', $request->header('authorization')))?->tokenable_id;
        return UserNotification::when($id, function ($query) use ($id) {
            $query->where('user_id', $id);
        })
            ->where('device_token', $request->get('device_token'))
            ->sent()
            ->count();
    }

    public function notices(Request $request)
    {
        $id = PersonalAccessToken::findToken(preg_replace('/Bearer\s/', '', $request->header('authorization')))?->tokenable_id;
        return UserNotification::with([
            'notification'
        ])
            ->when($id, function ($query) use ($id) {
                $query->where('user_id', $id);
            })
            ->where('device_token', $request->get('device_token'))
            ->onlySent()
            ->sort()
            ->paginate(15);
    }

    public function noticeShow($id)
    {
        $model = UserNotification::findOrFail($id);
        $model->update([
            'seen_at' => date('Y-m-d H:i:s')
        ]);
        return $model;
    }

    public function edit($id)
    {
        return $this->cEdit($id);
    }

    public function update(Request $request, $id)
    {
        if ($request->get('password')) {
            $this->modelClass::findOrFail($id)
                ->update([
                    'password' => $request->password
                ]);
        }
        $request->offsetSet('phone', nudePhone($request->get('phone')));
        $request->offsetUnset('password');
        return $this->cUpdate($request, $id);
    }

    public function delete($id)
    {
        return $this->cDelete($id);
    }

}
