<?php

namespace App\Http\Controllers\Auth;

use App\Enums\General\StatusStringEnum;
use App\Enums\RegisteredByEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\Role;
use App\Models\User\UserRole;
use App\Services\User\Auth\OneID\Contracts\iOneIDService;
use Illuminate\Http\Request;

class ApiRegisterController extends Controller
{
    public function oneID(Request $request, iOneIDService $service)
    {
        if (!is_null($request->code)) {
            return $this->registerOneID($request, $service);
        }
        $redirect = config('params.one_id_redirect') . "/api/register/one-id/callback";
        return $service->code($request, $redirect);
    }

    public function registerOneID(Request $request, iOneIDService $service)
    {
        $data = $service->data($request);

        $user = User::where('pinfl', $data['pin'])
            ->first();

        if ($user) {
            return redirect(config('params.mobile_redirect') . '?' . http_build_query([
                'errors' => [
                    'auth' => __('auth.already registered')
                ],
                'status' => 422
            ]));
        }

        $role = Role::user()->first();

        $newUser = User::create([
            'email' => $data['email'],
            'name' => $data['first_name'],
            'surname' => $data['sur_name'],
            'patronymic' => $data['mid_name'],
            'phone' => $data['mob_phone_no'],
            'birthdate' => $data['birth_date'],
            'expiration_date' => $data['pport_expr_date'],
            'issue_date' => $data['pport_issue_date'],
            'passport' => $data['pport_no'],
            'pinfl' => $data['pin'],
            'region_id' => $request->get('region_id'),
            'registered_by' => RegisteredByEnum::ONE_ID,
            'one_id' => true,
            'status' => StatusStringEnum::ACTIVE,
        ]);

        UserRole::create([
            'user_id' => $newUser->id,
            'role_id' => $role->id,
            'status' => StatusStringEnum::ACTIVE
        ]);

        $token = $newUser->createToken('name')->plainTextToken;

        $response = [
            'token' => $token,
            'token_type' => 'Bearer',
        ];

        return redirect(config('params.mobile_redirect') . '?' . http_build_query($response));
    }
}
