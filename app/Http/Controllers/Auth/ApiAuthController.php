<?php

namespace App\Http\Controllers\Auth;

use App\Enums\General\StatusStringEnum;
use App\Enums\RegisteredByEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginApiRequest;
use App\Models\User;
use App\Models\User\Role;
use App\Models\User\UserRole;
use App\Models\User\UserRolePermission;
use App\Services\User\Auth\OneID\Contracts\iOneIDService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{
    public function oneID(Request $request, iOneIDService $service)
    {
        if (!is_null($request->code)) {
            return $this->loginOneID($request, $service);
        }
        $redirect = config('params.one_id_redirect') . "/api/login/one-id/callback";
        return $service->code($request, $redirect);
    }

    public function login(LoginApiRequest $request, iOneIDService $service)
    {
        $user = User::where('username', $request->username)
            ->first();

        if (is_null($user) || !Hash::check($request->password, $user->password)) {
            return error_response(__('auth.failed'), 422);
        }

        $token = $user->createToken('name')->plainTextToken;

        $service->attachDevice($request, $token);

        $response = [
            'token' => $token,
            'token_type' => 'Bearer',
        ];

        return success_response($response);
    }

    public function loginOneID(Request $request, iOneIDService $service)
    {
        $data = $service->data($request);

        $user = User::where('pinfl', $data['pin'])
            ->whereHas('user_roles', function ($query) {
                $query->whereHas('role', function ($query) {
                    $query->userGroup();
                })
                    ->active();
            })
            ->first();

        if (is_null($user)) {
            $user = $this->register($request, $data);
        }

        $token = $user->createToken('name')->plainTextToken;

        $response = [
            'token' => $token,
            'token_type' => 'Bearer',
        ];

        return redirect(config('params.mobile_redirect') . '?' . http_build_query($response));
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return success_response(__('message.Successfully'));
    }

    public function register(Request $request, $data)
    {
        $role = Role::user()->first();

        $user = User::create([
            'email' => $data['email'] ?? null,
            'name' => $data['first_name'],
            'surname' => $data['sur_name'],
            'patronymic' => $data['mid_name'],
            'phone' => $data['mob_phone_no'] ?? null,
            'birthdate' => $data['birth_date'] ?? null,
            'expiration_date' => $data['pport_expr_date'] ?? null,
            'issue_date' => $data['pport_issue_date'] ?? null,
            'passport' => $data['pport_no'],
            'pinfl' => $data['pin'],
            'region_id' => $request->get('region_id'),
            'registered_by' => RegisteredByEnum::ONE_ID,
            'one_id' => true,
            'status' => StatusStringEnum::ACTIVE,
        ]);

        $userRole = UserRole::create([
            'user_id' => $user->id,
            'role_id' => $role->id,
            'status' => StatusStringEnum::ACTIVE
        ]);

        UserRolePermission::attachPermissions($userRole);

        return $user;
        // $token = $user->createToken('name')->plainTextToken;

        // $response = [
        //     'token' => $token,
        //     'token_type' => 'Bearer',
        // ];

        // return redirect(config('params.mobile_redirect') . '?' . http_build_query($response));
    }
}
